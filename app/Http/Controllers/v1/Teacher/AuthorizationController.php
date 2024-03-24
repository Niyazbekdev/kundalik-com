<?php

namespace App\Http\Controllers\v1\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreSignInRequest;
use App\Services\v1\Admin\auth\GetMeService;
use App\Services\v1\Admin\auth\LogOutService;
use App\Services\v1\Teacher\auth\SignInService;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function signIn(StoreSignInRequest $request)
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
