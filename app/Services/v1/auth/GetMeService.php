<?php

namespace App\Services\v1\auth;

use App\Http\Resources\v1\Admin\UserResource;

class GetMeService
{
    public function execute()
    {
        $user = new UserResource(auth()->user());

        return response()->success($user);
    }
}
