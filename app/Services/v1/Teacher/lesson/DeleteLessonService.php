<?php

namespace App\Services\v1\Teacher\lesson;

use App\Models\Course;

class DeleteLessonService
{
    public function execute(Course $course, string $lesson)
    {
        $lessonD = $course->lessons()->findOrFail($lesson);

        $lessonD->delete();

        return response()->successfull();
    }
}
