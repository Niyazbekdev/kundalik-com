<?php

namespace App\Services\v1\Admin\student;

use App\Models\Student;

class DeleteStudentService
{
    public function execute(Student $student)
    {
        $student->delete();

        return response()->successfull();
    }
}
