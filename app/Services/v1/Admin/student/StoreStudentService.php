<?php

namespace App\Services\v1\Admin\student;

use App\Http\Requests\v1\StoreStudentRequest;
use App\Http\Resources\v1\student\StudentResource;
use App\Models\Payment;
use App\Models\Student;

class StoreStudentService
{
    public function execute(StoreStudentRequest $request)
    {
        $data = $request->validated();

        $student = Student::create($data);

        Payment::create([
            'student_id' => $student->id,
            'course_id' => $student->course_id
        ]);

        return response()->success(new StudentResource($student));
    }
}
