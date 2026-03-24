<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class QuestionImageSeeder extends Seeder
{
    public function run(): void
    {
        if ($this->command) {
            Artisan::call('questions:download-images', [], $this->command->getOutput());

            return;
        }

        Artisan::call('questions:download-images');
    }
}
