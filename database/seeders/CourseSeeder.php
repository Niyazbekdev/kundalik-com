<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::create([
            'user_id' => 2,
            'name' => 'front end',
            'duration' => 6,
            'price' => 500000,
            'count_student' => 12,
            'start' => '2024-04-05',
            'days' => 'odd',
            'time' => '18:00:00'
        ]);

        Course::create([
            'user_id' => 3,
            'name' => 'backend',
            'duration' => 5,
            'price' => 500000,
            'count_student' => 10,
            'start' => '2024-04-05',
            'days' => 'even',
            'time' => '09:00:00'
        ]);
    }
}
