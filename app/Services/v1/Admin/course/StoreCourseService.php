<?php

namespace App\Services\v1\Admin\course;

use App\Http\Requests\v1\StoreCourseRequest;
use App\Http\Resources\v1\Admin\Course\CourseResource;
use App\Models\Course;

class StoreCourseService
{
    public function execute(StoreCourseRequest $request)
    {
        $data = $request->validated();

        $course = Course::create($data);

        return response()->success(new CourseResource($course));
    }
}
