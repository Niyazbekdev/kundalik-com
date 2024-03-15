<?php

namespace App\Providers;

use \Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Response::macro('success', function ($data) {
            return response()->json([
                'success' => true,
                'data' => $data,
            ]);
        });

        Response::macro('error', function ($error, $status_code) {
            return response()->json([
                'success' => false,
                'error' => $error,
            ], $status_code);
        });

        Response::macro('successfull', function (){
            return response()->json([
                'success' => true,
            ]);
        });
    }
}
