<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreTeacherRequest;
use App\Http\Requests\v1\UpdateTeacherRequest;
use App\Services\v1\Admin\teacher\DeleteTeacherService;
use App\Services\v1\Admin\teacher\IndexTeacherService;
use App\Services\v1\Admin\teacher\ShowTeacherService;
use App\Services\v1\Admin\teacher\StoreTeacherService;
use App\Services\v1\Admin\teacher\UpdateTeacherService;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        return app(IndexTeacherService::class)->execute($request);
    }

    public function show(string $user)
    {
        return app(ShowTeacherService::class)->execute($user);
    }

    public function store(StoreTeacherRequest $request)
    {
        return app(StoreTeacherService::class)->execute($request);
    }

    public function update(string $user, UpdateTeacherRequest $request)
    {
        return app(UpdateTeacherService::class)->execute($user, $request);
    }

    public function destroy(string $user)
    {
        return app(DeleteTeacherService::class)->execute($user);
    }
}
