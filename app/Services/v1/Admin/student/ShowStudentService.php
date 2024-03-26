<?php

namespace App\Services\v1\Admin\student;

use App\Http\Resources\v1\student\StudentResource;
use App\Models\Student;

class ShowStudentService
{
    public function execute(Student $student)
    {
        return response()->success(new StudentResource($student->withoutRelations()));
    }
}
