<?php

namespace App\Services\v1\Teacher\auth;

use App\Http\Requests\v1\StoreSignInRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignInService
{
    public function execute(StoreSignInRequest $request)
    {
        $data = $request->validated();

        $teacher = User::where('role_id', 2)->where('phone', $data['phone'])->first();

        if (! $teacher or ! Hash::check($data['password'], $teacher->password))
            return response()->error('user not found or password in correct', 422);

        $token = $teacher->createToken('teacher model', ['teacher'])->plainTextToken;

        return response()->success(['token' => $token]);
    }
}
