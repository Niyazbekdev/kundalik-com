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
            'time' => '18:00:00'
        ]);

        Course::create([
            'user_id' => 3,
            'name' => 'backend',
            'duration' => 6,
            'price' => 500000,
            'count_student' => 10,
            'time' => '09:00:00'
        ]);
    }
}
