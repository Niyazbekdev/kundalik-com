<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = Student::factory()->count(12)->create();
        foreach ($students as $student){
            $student->courses()->attach(1);
        }
//
        $students = Student::factory()->count(10)->create();
        foreach ($students as $student){
            $student->courses()->attach(2);
        }
    }
}
