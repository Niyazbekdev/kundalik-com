<?php

use App\Http\Controllers\v1\Teacher\AuthorizationController;
use App\Http\Controllers\v1\Teacher\CourseController;
use App\Http\Controllers\v1\Teacher\DavomatController;
use App\Http\Controllers\v1\Teacher\LessonController;
use Illuminate\Support\Facades\Route;

Route::post('signin',[AuthorizationController::class, 'signIn']);

Route::middleware(['auth:sanctum', 'ability:teacher'])->group(function (){
    Route::get('getme', [AuthorizationController::class, 'getMe'])->name('teachers.index');
    Route::post('logout', [AuthorizationController::class, 'logOut']);
    Route::get('courses', [CourseController::class, 'index'])->name('teachers.index');
    Route::get('courses/{course}', [CourseController::class, 'show']);
    Route::apiResource('courses.lessons', LessonController::class);
    Route::get('lessons/{lesson}/students',[DavomatController::class, 'index']);
});
