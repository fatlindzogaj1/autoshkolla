<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Question;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
class DownloadQuestionImages extends Command
{
    protected $signature = 'questions:download-images';
    protected $description = 'Download all question images locally';

    public function handle()
    {
        $baseUrl = "https://ik.imagekit.io/phihyapwi/";

        Question::whereNotNull('image')
            ->where('image', '!=', '')
            ->chunk(50, function ($questions) use ($baseUrl) {

                // Filter already downloaded
                $questions = $questions->filter(function ($q) {
                    return !Storage::disk('public')->exists($q->image);
                })->values();

                if ($questions->isEmpty()) return;

                $responses = Http::pool(fn($pool) => $questions->map(function($q) use ($baseUrl, $pool) {
                    try {
                        return $pool->retry(3, 100)->get($baseUrl . $q->image);
                    } catch (\Throwable $e) {
                        return $e;
                    }
                })->all());

                foreach ($questions as $index => $question) {

                    $response = $responses[$index];

                    if ($response instanceof \Illuminate\Http\Client\Response && $response->successful()) {
                        Storage::disk('public')->put($question->image, $response->body());
                    } else {
                        $this->error("Failed to download image: {$question->image}");
                    }
                }
            });

        $this->info("Done!");
    }
}
