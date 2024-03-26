<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $students = Student::all();

        foreach ($students as  $student){
            $student->payments()->create([
                'course_id' => $student['course_id'],
            ]);
        }
    }
}
