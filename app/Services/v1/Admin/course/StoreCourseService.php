<?php

namespace App\Services\v1\Admin\course;

use App\Http\Requests\v1\StoreCourseRequest;
use App\Http\Resources\v1\Admin\Course\CourseResource;
use App\Models\Course;
use App\Models\User;

class StoreCourseService
{
    public function execute(StoreCourseRequest $request)
    {
        $data = $request->validated();

        $user = User::find($data['user_id']);
        if (! $user)
            return response()->error('not found user', 422);

        $course = Course::create($data);

        return response()->success(new CourseResource($course));
    }
}
