<?php

namespace App\Services\v1\Teacher\lesson;

use App\Http\Resources\v1\Teacher\lesson\LessonCollection;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexLessonService
{
    public function execute(Course $course, Request $request)
    {
        $lessons = $course->lessons()->paginate($request->limit ?? 10);

        return response()->success(new LessonCollection($lessons));
    }
}