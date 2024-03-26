<?php

namespace App\Services\v1\Admin\teacher;

use App\Http\Resources\v1\Teacher\TeacherResource;
use App\Models\User;

class ShowTeacherService
{
    public function execute(string $id)
    {
        $user = User::find($id);

        if (!$user || $user->role_id != 2)
            return response()->error('teacher not found', 404);

        return  new TeacherResource($user);
    }
}
