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

        Answer::whereNotNull('image')
            ->where('image', '!=', '')
            ->chunk(50, function ($answers) use ($baseUrl) {

                // Filter already downloaded
                $answers = $answers->filter(fn($a) => !Storage::disk('public')->exists($a->image))
                    ->values();

                if ($answers->isEmpty()) {
                    return;
                }

                // HTTP pool with safe try/catch for each request
                $responses = Http::pool(fn($pool) => $answers->map(function ($a) use ($baseUrl, $pool) {
                    try {
                        return $pool->retry(3, 100)->get($baseUrl . $a->image);
                    } catch (\Throwable $e) {
                        return null;
                    }
                })->all());

                foreach ($answers as $index => $answer) {
                    $response = $responses[$index];

                    if ($response instanceof Response && $response->successful()) {
                        Storage::disk('public')->put($answer->image, $response->body());
                        $this->info("Downloaded: {$answer->image}");
                    } else {
                        $this->error("Failed to download: {$answer->image}");
                    }
                }
            });

        $this->info('All done!');
    }
}
