<?php

namespace App\Services\v1\Teacher\davomat;

use App\Http\Resources\v1\student\StudentResource;
use App\Models\Course;
use App\Models\Lesson;

class IndexDavomatService
{
    public function execute(Lesson $lesson)
    {
        $course = Course::findOrFail($lesson->course_id);

        $students = $course->students()->get();

        return response()->success(StudentResource::collection($students));
    }
}
