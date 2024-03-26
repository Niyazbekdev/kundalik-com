<?php

namespace App\Services\v1\Teacher\lesson;

use App\Http\Resources\v1\lesson\LessonResource;
use App\Models\Course;
use App\Models\Lesson;

class ShowLessonService
{
    public function execute(Course $course, Lesson $lesson)
    {
        $course->lessons()->findOrFail($lesson->id);

        return response()->success(new LessonResource($lesson));
    }
}
