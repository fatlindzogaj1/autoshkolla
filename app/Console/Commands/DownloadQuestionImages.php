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

        Question::whereNotNull('image')
            ->where('image', '!=', '')
            ->chunk(10, function ($questions) use ($baseUrl) {

                // Filter out images already downloaded
                $questions = $questions->filter(fn($q) => !Storage::disk('public')->exists($q->image))
                    ->values();

                if ($questions->isEmpty()) {
                    return;
                }

                // Use HTTP pool safely
                $responses = Http::pool(fn($pool) => $questions->map(function ($q) use ($baseUrl, $pool) {
                    try {
                        // Attempt to download with retry
                        return $pool->retry(3, 100)->get($baseUrl . $q->image);
                    } catch (\Throwable $e) {
                        // Return null on failure
                        return null;
                    }
                })->all());

                foreach ($questions as $index => $question) {
                    $response = $responses[$index];

                    // Only save if it's a valid successful response
                    if ($response instanceof Response && $response->successful()) {
                        Storage::disk('public')->put($question->image, $response->body());
                        $this->info("Downloaded: {$question->image}");
                    } else {
                        $this->error("Failed to download: {$question->image}");
                    }
                }
            });

        $this->info('All done!');
    }
}
