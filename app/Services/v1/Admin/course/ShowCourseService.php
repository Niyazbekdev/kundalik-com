<?php

namespace App\Services\v1\Admin\course;

use App\Http\Resources\v1\Course\CourseResource;
use App\Models\Course;

class ShowCourseService
{
    public function execute(string $id)
    {
        $course = Course::with('user')->findOrFail($id);

        return response()->success(new CourseResource($course));
    }
}
