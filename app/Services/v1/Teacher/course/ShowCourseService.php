<?php

namespace App\Services\v1\Teacher\course;

use App\Http\Resources\v1\Course\CourseResource;
use App\Models\Course;

class ShowCourseService
{
    public function execute(Course $course)
    {
        if ($course['user_id'] != auth()->id())
            return response()->error('course not found', 404);

        return response()->success(new CourseResource($course->withoutRelations()));
    }
}
