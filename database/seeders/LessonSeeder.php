<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::find(1);

        $lesson = Lesson::create([
            'course_id' => 1,
            'name' => 'first lesson',
            'date' => '2024-03-05',
        ]);

        $lesson->students()->sync($course->students()->pluck('id'));

        $lesson1 = Lesson::create([
            'course_id' => 1,
            'name' => 'second lesson',
            'date' => '2024-03-07',
        ]);

        $lesson1->students()->sync($course->students()->pluck('id'));

        $lesson2 = Lesson::create([
            'course_id' => 1,
            'name' => 'thrid lesson',
            'date' => '2024-03-09',
        ]);

        $lesson2->students()->sync($course->students()->pluck('id'));

        $course = Course::find(2);

        $lesson3 = Lesson::create([
            'course_id' => 2,
            'name' => 'first lesson 2',
            'date' => '2024-02-02'
        ]);

        $lesson3->students()->sync($course->students()->pluck('id'));

        $lesson4 = Lesson::create([
            'course_id' => 2,
            'name' => 'second lesson 2',
            'date' => '2024-02-04'
        ]);

        $lesson4->students()->sync($course->students()->pluck('id'));

        $lesson5 = Lesson::create([
            'course_id' => 2,
            'name' => 'thrid lesson 2',
            'date' => '2024-02-06'
        ]);

        $lesson5->students()->sync($course->students()->pluck('id'));
    }
}
