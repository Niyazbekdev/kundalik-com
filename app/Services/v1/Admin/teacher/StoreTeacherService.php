<?php

namespace App\Services\v1\Admin\teacher;

use App\Http\Requests\v1\StoreTeacherRequest;
use App\Http\Resources\v1\Admin\Teacher\TeacherResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreTeacherService
{
    public function execute(StoreTeacherRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'role_id' => 2,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
        ]);

        return response()->success(new TeacherResource($user));
    }
}
