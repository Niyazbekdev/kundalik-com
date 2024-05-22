<?php

namespace App\Services\v1\Admin\payment;

use App\Http\Requests\v1\UpdatePaymentRequest;
use App\Models\Student;

class UpdatePaymentService
{
    public function execute(Student $student, string $payment, UpdatePaymentRequest $request)
    {
        $payments = $student->payments()->findOrFail($payment);

        $data = $request->validated();

        $payments[$data['month']] = $data['is_paid'];
        $payments->save();

        return response()->successfull();
    }
}
