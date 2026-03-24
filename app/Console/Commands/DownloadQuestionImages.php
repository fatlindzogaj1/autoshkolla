<?php

namespace App\Console\Commands;

use App\Models\Question;
use Illuminate\Console\Command;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DownloadQuestionImages extends Command
{
    protected $signature = 'questions:download-images';

    protected $description = 'Download all question images locally';

    public function handle()
    {
        $baseUrl = 'https://ik.imagekit.io/phihyapwi/';
        $query = Question::whereNotNull('image')->where('image', '!=', '');
        $total = (clone $query)->count();

        if ($total === 0) {
            $this->info('No question images found.');

            return self::SUCCESS;
        }

        $downloaded = 0;
        $failed = 0;
        $skipped = 0;

        $this->line("Processing {$total} question images...");
        $bar = $this->output->createProgressBar($total);
        $bar->start();

        $query->chunk(10, function ($questions) use ($baseUrl, $bar, &$downloaded, &$failed, &$skipped) {
            $questionsToDownload = $questions->filter(fn($q) => !Storage::disk('public')->exists($q->image))->values();
            $skipped += $questions->count() - $questionsToDownload->count();

            if ($questionsToDownload->isNotEmpty()) {
                $responses = Http::pool(fn($pool) => $questionsToDownload->map(function ($q) use ($baseUrl, $pool) {
                    try {
                        return $pool->retry(3, 100)->get($baseUrl . $q->image);
                    } catch (\Throwable $e) {
                        return null;
                    }
                })->all());

                foreach ($questionsToDownload as $index => $question) {
                    $response = $responses[$index] ?? null;

                    if ($response instanceof Response && $response->successful()) {
                        Storage::disk('public')->put($question->image, $response->body());
                        $downloaded++;
                    } else {
                        $failed++;
                    }
                }
            }

            $bar->advance($questions->count());
        });

        $bar->finish();
        $this->newLine(2);
        $this->info("Done. Downloaded: {$downloaded}, skipped: {$skipped}, failed: {$failed}");

        return self::SUCCESS;
    }
}
