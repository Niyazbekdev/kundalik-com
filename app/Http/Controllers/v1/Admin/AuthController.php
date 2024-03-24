<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreSignInRequest;
use App\Services\v1\Admin\auth\GetMeService;
use App\Services\v1\Admin\auth\LogOutService;
use App\Services\v1\Admin\auth\SignInService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logIn(StoreSignInRequest $request)
    {
        return app(SignInService::class)->execute($request);
    }

    public function getMe()
    {
        return app(GetMeService::class)->execute();
    }

    public function logOut(Request $request)
    {
        return app(LogOutService::class)->execute($request);
    }
}
