<?php

namespace App\Services\v1\Admin\teacher;

use App\Models\User;

class DeleteTeacherService
{
    public function execute(string $user)
    {
        $teacher = User::find($user);

        if (!$teacher || $teacher->role_id != 2)
            return response()->error('user not found', 404);

        $teacher->delete();
        return response()->true();
    }
}
