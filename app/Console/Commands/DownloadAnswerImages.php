<?php

namespace App\Console\Commands;

use App\Models\Answer;
use Illuminate\Console\Command;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DownloadAnswerImages extends Command
{
    protected $signature = 'answers:download-images';

    protected $description = 'Download all answer images locally';

    public function handle()
    {
        $baseUrl = 'https://ik.imagekit.io/phihyapwi/';
        $query = Answer::whereNotNull('image')->where('image', '!=', '');
        $total = (clone $query)->count();

        if ($total === 0) {
            $this->info('No answer images found.');

            return self::SUCCESS;
        }

        $downloaded = 0;
        $failed = 0;
        $skipped = 0;

        $this->line("Processing {$total} answer images...");
        $bar = $this->output->createProgressBar($total);
        $bar->start();

        $query->chunk(10, function ($answers) use ($baseUrl, $bar, &$downloaded, &$failed, &$skipped) {
            $answersToDownload = $answers->filter(fn($a) => !Storage::disk('public')->exists($a->image))->values();
            $skipped += $answers->count() - $answersToDownload->count();

            if ($answersToDownload->isNotEmpty()) {
                $responses = Http::pool(fn($pool) => $answersToDownload->map(function ($a) use ($baseUrl, $pool) {
                    try {
                        return $pool->retry(3, 100)->get($baseUrl . $a->image);
                    } catch (\Throwable $e) {
                        return null;
                    }
                })->all());

                foreach ($answersToDownload as $index => $answer) {
                    $response = $responses[$index] ?? null;

                    if ($response instanceof Response && $response->successful()) {
                        Storage::disk('public')->put($answer->image, $response->body());
                        $downloaded++;
                    } else {
                        $failed++;
                    }
                }
            }

            $bar->advance($answers->count());
        });

        $bar->finish();
        $this->newLine(2);
        $this->info("Done. Downloaded: {$downloaded}, skipped: {$skipped}, failed: {$failed}");

        return self::SUCCESS;
    }
}
