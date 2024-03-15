<?php

namespace App\Services\v1\Admin\teacher;

use App\Http\Requests\v1\UpdateTeacherRequest;
use App\Http\Resources\v1\Admin\Teacher\TeacherResource;
use App\Models\User;

class UpdateTeacherService
{
    public function execute(string $user, UpdateTeacherRequest $request)
    {
        $data = $request->validated();
        $teacher = User::find($user);

        if(!$teacher || $teacher->role_id != 2)
            return response()->error('user not found', 404);

        $teacher->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ]);

        return  response()->success(new TeacherResource($teacher));
    }
}
