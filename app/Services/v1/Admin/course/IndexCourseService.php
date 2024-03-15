<?php

namespace App\Services\v1\Admin\course;

use App\Http\Resources\v1\Admin\Course\CourseCollection;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexCourseService
{
    public function execute(Request $request)
    {
        $course = Course::with('user')->paginate($request->limit ?? 10);

        return response()->success(new CourseCollection($course));
    }
}
