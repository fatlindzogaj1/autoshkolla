<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class AnswerImageSeeder extends Seeder
{
    public function run(): void
    {
        if ($this->command) {
            Artisan::call('answers:download-images', [], $this->command->getOutput());

            return;
        }

        Artisan::call('answers:download-images');
    }
}
