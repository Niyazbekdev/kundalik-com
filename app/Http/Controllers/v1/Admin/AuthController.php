<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreSignInRequest;
use App\Services\v1\Admin\SignInService;

class AuthController extends Controller
{
    public function logIn(StoreSignInRequest $request)
    {
        return app(SignInService::class)->execute($request);
    }

    public function getMe()
    {

    }

    public function logOut()
    {

    }
}
