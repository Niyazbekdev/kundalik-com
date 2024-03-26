<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        Lesson::create([
            'course_id' => 1,
            'name' => 'first lesson',
            'date' => '2024-03-05',
        ]);

        Lesson::create([
            'course_id' => 1,
            'name' => 'second lesson',
            'date' => '2024-03-07',
        ]);

        Lesson::create([
            'course_id' => 1,
            'name' => 'thrid lesson',
            'date' => '2024-03-09',
        ]);

        Lesson::create([
            'course_id' => 2,
            'name' => 'first lesson 2',
            'date' => '2024-02-02'
        ]);

        Lesson::create([
            'course_id' => 2,
            'name' => 'second lesson 2',
            'date' => '2024-02-04'
        ]);

        Lesson::create([
            'course_id' => 2,
            'name' => 'thrid lesson 2',
            'date' => '2024-02-06'
        ]);
    }
}
