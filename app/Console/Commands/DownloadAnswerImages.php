<?php

namespace App\Console\Commands;

use App\Models\Answer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DownloadAnswerImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'answers:download-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download all answers images locally';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $baseUrl = "https://ik.imagekit.io/phihyapwi/";
        Answer::whereNotNull('image')
            ->where('image', '!=', '')
            ->chunk(50, function ($answers) use ($baseUrl) {

                $answers = $answers->filter(function ($a) {
                    return !Storage::disk('public')->exists($a->image);
                })->values();

                if ($answers->isEmpty()) return;

                $responses = Http::pool(fn($pool) => $answers->map(function($a) use ($baseUrl, $pool) {
                    try {
                        return $pool->retry(3, 100)->get($baseUrl . $a->image);
                    } catch (\Throwable $e) {
                        return $e;
                    }
                })->all());

                foreach ($answers as $index => $answer) {

                    $response = $responses[$index];

                    if ($response instanceof \Illuminate\Http\Client\Response && $response->successful()) {
                        Storage::disk('public')->put($answer->image, $response->body());
                    } else {
                        $this->error("Failed to download image: {$answer->image}");
                    }
                }
            });

        $this->info("Done!");
    }
}
