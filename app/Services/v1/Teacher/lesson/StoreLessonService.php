<?php

namespace App\Services\v1\Teacher\lesson;

use App\Http\Requests\v1\StoreLessonRequest;
use App\Http\Resources\v1\Teacher\lesson\LessonResource;
use App\Models\Course;

class StoreLessonService
{
    public function execute(Course $course, StoreLessonRequest $request)
    {
        $data = $request->validated();

        $lesson = $course->lessons()->create($data);

       $lesson->students()->sync($course->students()->pluck('id'));

        return response()->success(new LessonResource($lesson));
    }
}
