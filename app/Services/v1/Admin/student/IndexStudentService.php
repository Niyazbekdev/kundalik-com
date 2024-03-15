<?php

namespace App\Services\v1\Admin\student;

use App\Http\Resources\v1\Seller\student\StudentCollection;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class IndexStudentService
{
    public function execute(Request $request)
    {
        $courseId = $request->course_id ?? null;

        $student = Student::with('courses')
            ->when($request->search ?? null, function ($query, $search){
                $query->search($search);
            })->when($courseId, function ($query) use ($courseId){
                $query->whereHas('courses', function (Builder $builder) use ($courseId){
                    $builder->with('users')->where('course_id', $courseId);
                });
            })
            ->paginate($request->limit ?? 10);

        return response()->success(new StudentCollection($student));
    }
}
