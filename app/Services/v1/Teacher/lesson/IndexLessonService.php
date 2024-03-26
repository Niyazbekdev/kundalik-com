<?php

namespace App\Services\v1\Teacher\lesson;

use App\Http\Resources\v1\lesson\LessonCollection;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexLessonService
{
    public function execute(Course $course, Request $request)
    {
        $lessons = $course
            ->lessons()
            ->orderBy('date', 'asc')
            ->paginate($request->limit ?? 10);

        return response()->collection(new LessonCollection($lessons));
    }
}
