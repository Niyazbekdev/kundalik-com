<?php

namespace App\Services\v1\Teacher\course;

use App\Http\Resources\v1\Course\CourseCollection;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexCourseService
{
    public function execute(Request $request)
    {
        $course = Course::with('user')->where('user_id', auth()->id())->paginate($request->limit ?? 10);

        return response()->collection(new CourseCollection($course));
    }
}
