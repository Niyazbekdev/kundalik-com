<?php

namespace App\Services\v1\auth;

use Illuminate\Http\Request;

class LogOutService
{
    public function execute(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->success(['logged in']);
    }
}
