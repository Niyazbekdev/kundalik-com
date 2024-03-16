<?php

namespace App\Http\Controllers\v1\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Services\v1\Teacher\course\IndexCourseService;
use App\Services\v1\Teacher\course\ShowCourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        return app(IndexCourseService::class)->execute($request);
    }

    public function show(Course $course)
    {
        return app(ShowCourseService::class)->execute($course);
    }
}
