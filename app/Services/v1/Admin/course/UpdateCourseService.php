<?php

namespace App\Services\v1\Admin\course;

use App\Http\Requests\v1\UpdateCourseRequest;
use App\Http\Resources\v1\Course\CourseResource;
use App\Models\Course;

class UpdateCourseService
{
    public function execute(UpdateCourseRequest $request, string $id)
    {
        $data = $request->validated();

        $course = Course::findOrFail($id);

        $course->update([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'duration' => $data['duration'],
            'price' => $data['price'],
            'count_student' => $data['count_student'],
            'time' => $data['time'],
        ]);

        return response()->success(new CourseResource($course));
    }
}
