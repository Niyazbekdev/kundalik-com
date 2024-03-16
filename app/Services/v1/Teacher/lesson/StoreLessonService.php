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

        return response()->success(new LessonResource($lesson));
    }
}
