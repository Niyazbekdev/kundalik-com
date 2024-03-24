<?php

namespace App\Services\v1\Admin\auth;

use App\Http\Requests\v1\StoreSignInRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignInService
{
    public function execute(StoreSignInRequest $request)
    {
        $data = $request->validated();

        $user = User::where('role_id', 1)->where('phone', $data['phone'])->first();

        if (!$user || !Hash::check($data['password'], $user->password))
            return response()->error('user not found or password in correct', 422);

        $token = $user->createToken('admin model', ['admin'])->plainTextToken;

        return response()->success(['token' => $token]);
    }
}
