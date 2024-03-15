<?php

namespace App\Services\v1\Admin\course;

use App\Models\Course;

class DeleteCourseService
{
    public function execute(string $id)
    {
        $course = Course::findOrFail($id);

        $course->delete();

        return response()->successfull();
    }
}
