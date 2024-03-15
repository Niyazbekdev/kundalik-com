<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreStudentRequest;
use App\Http\Requests\v1\UpdateStudentRequest;
use App\Models\Student;
use App\Services\v1\Admin\student\DeleteStudentService;
use App\Services\v1\Admin\student\IndexStudentService;
use App\Services\v1\Admin\student\ShowStudentService;
use App\Services\v1\Admin\student\StoreStudentService;
use App\Services\v1\Admin\student\UpdateStudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        return app(IndexStudentService::class)->execute($request);
    }

    public function store(StoreStudentRequest $request)
    {
        return app(StoreStudentService::class)->execute($request);
    }

    public function show(Student $student)
    {
        return app(ShowStudentService::class)->execute($student);
    }

    public function update(Student $student, UpdateStudentRequest $request)
    {
        return app(UpdateStudentService::class)->execute($student, $request);
    }

    public function destroy(Student $student)
    {
        return app(DeleteStudentService::class)->execute($student);
    }

}
