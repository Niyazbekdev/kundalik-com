<?php

namespace App\Services\v1\Admin\course;

use App\Http\Requests\v1\StoreCourseRequest;
use App\Http\Resources\v1\Course\CourseResource;
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

        $odds = Course::where('days', 'odd')->select('time')->get();

        foreach ($odds as $odd){
            if ($odd['time'] == $data['time'])
                return response()->error('time already exists', 422);
        }

        $course = Course::create($data);

        return response()->success(new CourseResource($course));
    }
}
