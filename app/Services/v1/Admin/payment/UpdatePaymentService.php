<?php

namespace App\Services\v1\Admin\payment;

use App\Http\Requests\v1\UpdatePaymentRequest;
use App\Models\Student;

class UpdatePaymentService
{
    public function execute(Student $student, string $payment, UpdatePaymentRequest $request)
    {
        $student->payments()->findOrFail($payment);

        $data = $request->validated();

        $student->update([
            'first' => $data['first'],
            'second' => $data['second'],
            'thrid' => $data['thrid'],
            'fourth' => $data['fourth'],
            'fifth' => $data['fifth'],
            'sixth' => $data['sixth'],
            'seventh' => $data['seventh'],
            'eighth' => $data['eighth'],
        ]);

        return response()->successfull();
    }
}
