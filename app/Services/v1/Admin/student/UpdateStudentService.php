<?php

namespace App\Services\v1\Admin\student;

use App\Http\Requests\v1\UpdateStudentRequest;
use App\Http\Resources\v1\Admin\student\StudentResource;
use App\Models\Student;

class UpdateStudentService
{
    public function execute(Student $student, UpdateStudentRequest $request)
    {
        $data = $request->validated();

        $student->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
        ]);

        return response()->success(new StudentResource($student));
    }
}
