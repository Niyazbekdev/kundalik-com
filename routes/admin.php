<?php

use App\Http\Controllers\v1\Admin\AuthController;
use App\Http\Controllers\v1\Admin\CourseController;
use App\Http\Controllers\v1\Admin\StudentController;
use App\Http\Controllers\v1\Admin\TeacherController;
use Illuminate\Support\Facades\Route;

Route::post('signin', [AuthController::class, 'logIn']);

Route::middleware(['auth:sanctum', 'ability:admin'])->group(function (){
    Route::apiResource('teachers', TeacherController::class);
    Route::apiResource('courses', CourseController::class);
    Route::apiResource('students', StudentController::class);
});
