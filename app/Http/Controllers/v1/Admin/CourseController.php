<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreCourseRequest;
use App\Http\Requests\v1\UpdateCourseRequest;
use App\Services\v1\Admin\course\DeleteCourseService;
use App\Services\v1\Admin\course\IndexCourseService;
use App\Services\v1\Admin\course\ShowCourseService;
use App\Services\v1\Admin\course\StoreCourseService;
use App\Services\v1\Admin\course\UpdateCourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        return app(IndexCourseService::class)->execute($request);
    }

    public function store(StoreCourseRequest $request)
    {
        return app(StoreCourseService::class)->execute($request);
    }

    public function show(string $id)
    {
        return app(ShowCourseService::class)->execute($id);
    }

    public function update(UpdateCourseRequest $request, string $id)
    {
        return app(UpdateCourseService::class)->execute($request, $id);
    }

    public function destroy(string $id)
    {
        return app(DeleteCourseService::class)->execute($id);
    }
}
