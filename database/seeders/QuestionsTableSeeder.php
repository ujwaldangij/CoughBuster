<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert([
            [
                'question' => 'What is the capital of France?',
                'options' => json_encode(['A' => 'Paris', 'B' => 'London', 'C' => 'Berlin', 'D' => 'Madrid']),
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'What is 2 + 2?',
                'options' => json_encode(['A' => '3', 'B' => '4', 'C' => '5', 'D' => '6']),
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Which planet is known as the Red Planet?',
                'options' => json_encode(['A' => 'Earth', 'B' => 'Mars', 'C' => 'Jupiter', 'D' => 'Saturn']),
                'correct_answer' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Who wrote "To Kill a Mockingbird"?',
                'options' => json_encode(['A' => 'Harper Lee', 'B' => 'Mark Twain', 'C' => 'Ernest Hemingway', 'D' => 'F. Scott Fitzgerald']),
                'correct_answer' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'What is the largest ocean on Earth?',
                'options' => json_encode(['A' => 'Atlantic Ocean', 'B' => 'Indian Ocean', 'C' => 'Arctic Ocean', 'D' => 'Pacific Ocean']),
                'correct_answer' => 'D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}