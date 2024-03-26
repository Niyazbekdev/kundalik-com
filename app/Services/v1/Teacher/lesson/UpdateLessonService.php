<?php

namespace App\Services\v1\Teacher\lesson;

use App\Http\Requests\v1\UpdateLessonRequest;
use App\Http\Resources\v1\lesson\LessonResource;
use App\Models\Course;

class UpdateLessonService
{
    public function execute(Course $course, string $lesson, UpdateLessonRequest $request)
    {
        $data = $request->validated();

        $lessonU = $course->lessons()->findOrFail($lesson);

        $lessonU->update([
            'name' => $data['name'],
            'date' => $data['date'],
        ]);

        return response()->success(new LessonResource($lessonU));
    }
}
