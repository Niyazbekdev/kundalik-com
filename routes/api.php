<?php

use App\Http\Controllers\v1\Admin\PaymentController;
use App\Http\Controllers\v1\Admin\StudentController;
use App\Http\Controllers\v1\Admin\TeacherController;
use App\Http\Controllers\v1\AuthController;
use App\Http\Controllers\v1\Teacher\CourseController;
use App\Http\Controllers\v1\Teacher\DavomatController;
use App\Http\Controllers\v1\Teacher\LessonController;
use Illuminate\Support\Facades\Route;

Route::post('signin', [AuthController::class, 'logIn']);

Route::middleware(['auth:sanctum', 'ability:teacher,admin'])->group(function (){
    Route::get('getme', [AuthController::class, 'getMe']);
    Route::post('logout', [AuthController::class, 'logOut']);
});

Route::middleware(['auth:sanctum', 'ability:teacher'])->group(function (){
    Route::get('teacher/courses', [CourseController::class, 'index'])->name('teacher.index');
    Route::get('teacher/courses/{course}', [CourseController::class, 'show']);
    Route::apiResource('teacher/courses.lessons', LessonController::class);
    Route::get('lessons/{lesson}/students',[DavomatController::class, 'index'])->name('attendance.index');
    Route::post('davomat/{lesson}/students', [DavomatController::class, 'store']);
});

Route::middleware(['auth:sanctum', 'ability:admin'])->group(function (){
    Route::apiResource('teachers', TeacherController::class);
    Route::apiResource('courses', App\Http\Controllers\v1\Admin\CourseController::class);
    Route::apiResource('students', StudentController::class);
    Route::get('courses/{course}/payments', [PaymentController::class, 'index']);
    Route::put('students/{student}/payments/{payment}', [PaymentController::class, 'update']);
});
