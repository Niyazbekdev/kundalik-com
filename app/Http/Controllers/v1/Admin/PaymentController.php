<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\UpdatePaymentRequest;
use App\Models\Course;
use App\Services\v1\Admin\payment\IndexPaymentService;
use App\Services\v1\Admin\payment\UpdatePaymentService;

class PaymentController extends Controller
{
    public function index(Course $course)
    {
        return app(IndexPaymentService::class)->execute($course);
    }

    public function update(Course $course, string $payment, UpdatePaymentRequest $request)
    {
        return app(UpdatePaymentService::class)->execute($course, $payment, $request);
    }
}
