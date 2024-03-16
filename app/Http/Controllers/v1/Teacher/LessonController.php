<?php

namespace App\Http\Controllers\v1\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreLessonRequest;
use App\Http\Requests\v1\UpdateLessonRequest;
use App\Models\Course;
use App\Services\v1\Teacher\lesson\DeleteLessonService;
use App\Services\v1\Teacher\lesson\IndexLessonService;
use App\Services\v1\Teacher\lesson\StoreLessonService;
use App\Services\v1\Teacher\lesson\UpdateLessonService;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Course $course, Request $request)
    {
        return app(IndexLessonService::class)->execute($course, $request);
    }

    public function store(Course $course, StoreLessonRequest $request)
    {
        return app(StoreLessonService::class)->execute($course, $request);
    }

    public function update(Course $course, string $lesson, UpdateLessonRequest $request)
    {
        return app(UpdateLessonService::class)->execute($course, $lesson, $request);
    }

    public function destroy(Course $course, string $lesson)
    {
        return app(DeleteLessonService::class)->execute($course, $lesson);
    }
}
