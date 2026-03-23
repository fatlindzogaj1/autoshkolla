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

                $responses = Http::pool(fn($pool) => $questions->map(fn($q) => $pool->get($baseUrl . $q->image)
                )
                );

                foreach ($questions as $index => $question) {

                    $response = $responses[$index];

                    if ($response->successful()) {
                        Storage::disk('public')->put($question->image, $response->body());
                    }
                }
            });

        $this->info("Done!");
    }
}
