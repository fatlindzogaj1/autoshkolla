<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QuestionsSeeder extends Seeder
{
    // Map question number ranges to category names
    protected array $categoryMap = [
        'situata'      => [1001, 1103], // Situata Rrugore
        'paralajmerim' => [2001, 2054], // Shenjat Paralajmëruese
        'ndalese'      => [2101, 2159], // Shenjat e Mandatit dhe Ndalesës
        'informacion'  => [2201, 2262], // Shenjat e Informacionit
        'drita_polici' => [2301, 2408], // Shenjat e Dritave dhe Policisë
        'vija'         => [2501, 2508], // Shenjat në Rrugë (Vijat)
        'rregulla'     => [3001, 5321], // Rregullat e Trafikut (includes 3000‑3104 and 5000‑5321 except 5200)
        'kryqezim'     => [4001, 4072], // Përparësia në Kryqëzime
        'automjet'     => [5201, 5235], // Njohuri për Automjetin
    ];

    protected array $categories = [];

    public function run(): void
    {
        $this->createCategories();
        $questions = $this->parseQuestionsFile();
        $this->importQuestions($questions);
    }

    /**
     * Insert categories into DB and store them in $this->categories.
     */
    protected function createCategories(): void
    {
        $names = [
            'situata'      => 'Situata Rrugore',
            'paralajmerim' => 'Shenjat Paralajmëruese',
            'ndalese'      => 'Shenjat e Mandatit dhe Ndalesës',
            'informacion'  => 'Shenjat e Informacionit',
            'drita_polici' => 'Shenjat e Dritave dhe Policisë',
            'vija'         => 'Shenjat në Rrugë (Vijat)',
            'rregulla'     => 'Rregullat e Trafikut',
            'kryqezim'     => 'Përparësia në Kryqëzime',
            'automjet'     => 'Njohuri për Automjetin',
        ];

        foreach ($names as $key => $name) {
            $id = DB::table('categories')->insertGetId([
                'name'       => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $this->categories[$key] = $id;
        }
    }

    /**
     * Read the questions.txt file and parse into an array.
     *
     * @return array
     */
    protected function parseQuestionsFile(): array
    {
        $path = database_path('seeders/data/questions.txt');
        if (!file_exists($path)) {
            $this->command->error('File questions.txt not found in database/seeders/data/');
            return [];
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $questions = [];
        $currentQuestion = null;

        foreach ($lines as $line) {
            $line = trim($line);

            // Skip page headers/footers like "===== Page X =====" or "Republika e Kosovës..."
            if (Str::startsWith($line, '=====') || Str::contains($line, 'Republika e Kosovës')) {
                continue;
            }

            // Detect new question: starts with number and dot
            if (preg_match('/^(\d{4})\.\s+(.+)$/', $line, $matches)) {
                // Save previous question if exists
                if ($currentQuestion) {
                    $questions[] = $currentQuestion;
                }

                $currentQuestion = [
                    'number'  => (int) $matches[1],
                    'text'    => trim($matches[2]),
                    'answers' => [],
                ];
            } elseif ($currentQuestion) {
                // This line might be an answer option
                $line = trim($line);
                if (empty($line)) continue;

                // Detect if it's a true/false answer or multiple choice
                // Check for checkmark symbols: ✓ or 
                $isCorrect = Str::startsWith($line, '✓') || Str::startsWith($line, '');
                $answerText = $isCorrect ? trim(substr($line, 1)) : $line;

                // Special handling for "E saktë." / "E pasaktë."
                if (in_array($answerText, ['E saktë.', 'E pasaktë.'])) {
                    // Already correct detection works
                }

                // Add answer if not empty
                if (!empty($answerText)) {
                    $currentQuestion['answers'][] = [
                        'text'      => $answerText,
                        'is_correct' => $isCorrect,
                    ];
                }
            }
        }

        // Add the last question
        if ($currentQuestion) {
            $questions[] = $currentQuestion;
        }

        $this->command->info('Parsed ' . count($questions) . ' questions.');
        return $questions;
    }

    /**
     * Import questions into database, link images, and assign categories.
     *
     * @param array $questions
     */
    protected function importQuestions(array $questions): void
    {
        // Prepare image directories
        $importDirs = [
            'situata' => storage_path('app/imports/situata'),
            'shenja'  => storage_path('app/imports/shenja'),
            'vetura'  => storage_path('app/imports/vetura'),
        ];

        foreach ($importDirs as $key => $dir) {
            if (!is_dir($dir)) {
                $this->command->warn("Import directory $dir does not exist. Images for $key will be skipped.");
            }
        }

        $targetDir = public_path('storage/questions');
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $count = 0;
        foreach ($questions as $q) {
            $number = $q['number'];
            $categoryId = $this->getCategoryIdForQuestion($number);
            if (!$categoryId) {
                $this->command->warn("No category found for question $number – skipping.");
                continue;
            }

            // Find image file
            $imagePath = null;
            foreach ($importDirs as $type => $dir) {
                if (!is_dir($dir)) continue;
                // Look for any file containing the question number (e.g., 1001.*.png)
                $files = glob($dir . '/' . $number . '.*.png');
                if (empty($files)) {
                    // Try with just number and any extension
                    $files = glob($dir . '/' . $number . '*.png');
                }
                if (!empty($files)) {
                    $source = $files[0];
                    $filename = 'q_' . $number . '.png';
                    $target = $targetDir . '/' . $filename;
                    copy($source, $target);
                    $imagePath = 'questions/' . $filename;
                    break;
                }
            }

            // Insert question
            $questionId = DB::table('questions')->insertGetId([
                'category_id'      => $categoryId,
                'question_number'  => $number,
                'question_text'    => $q['text'],
                'image'            => $imagePath,
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);

            // Insert answers
            foreach ($q['answers'] as $ans) {
                DB::table('answers')->insert([
                    'question_id' => $questionId,
                    'answer_text' => $ans['text'],
                    'is_correct'  => $ans['is_correct'],
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]);
            }

            $count++;
        }

        $this->command->info("Imported $count questions with answers.");
    }

    /**
     * Determine category ID based on question number.
     *
     * @param int $number
     * @return int|null
     */
    protected function getCategoryIdForQuestion(int $number): ?int
    {
        foreach ($this->categoryMap as $key => $range) {
            if ($number >= $range[0] && $number <= $range[1]) {
                // Exclude 5200 from 'rregulla' – handled by 'automjet'
                if ($key === 'rregulla' && $number >= 5201 && $number <= 5235) {
                    continue;
                }
                return $this->categories[$key] ?? null;
            }
        }
        return null;
    }
}
