<?php

namespace App\Services\v1\Admin\payment;

use App\Http\Requests\v1\UpdatePaymentRequest;
use App\Models\Course;

class UpdatePaymentService
{
    public function execute(Course $course, string $payment, UpdatePaymentRequest $request)
    {
        $course->payments()->findOrFail($payment);

        $data = $request->validated();

        $course->update([
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
