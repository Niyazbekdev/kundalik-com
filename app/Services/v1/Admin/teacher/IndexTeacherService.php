<?php

namespace App\Services\v1\Admin\teacher;

use App\Http\Resources\v1\Admin\Teacher\TeacherCollection;
use App\Models\User;
use Illuminate\Http\Request;

class IndexTeacherService
{
    public function execute(Request $request)
    {
        $teacher = User::where('role_id', 2)->paginate($request->limit ?? 10);

        return response()->collection(new TeacherCollection($teacher));
    }
}
