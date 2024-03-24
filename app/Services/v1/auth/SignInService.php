<?php

namespace App\Services\v1\auth;

use App\Http\Requests\v1\StoreSignInRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignInService
{
    public function execute(StoreSignInRequest $request)
    {
        $data = $request->validated();

        $user = User::where('phone', $data['phone'])->first();

        if (!$user || !Hash::check($data['password'], $user->password))
            return response()->error('user not found or password in correct', 422);

        $role = Role::find($user->role_id);

        $token = $user->createToken('user model', [$role['name']])->plainTextToken;

        return response()->success(['token' => $token]);
    }
}
