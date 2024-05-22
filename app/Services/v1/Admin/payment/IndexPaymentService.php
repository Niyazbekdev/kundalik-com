<?php

namespace App\Services\v1\Admin\payment;

use App\Models\Course;

class IndexPaymentService
{
    public function execute(Course $course)
    {
        $paymentColumns = [
            'id',
            'student_id',
        ];

        $durationMap = [
            1 => 'first',
            2 => ['first', 'second'],
            3 => ['first', 'second', 'third'],
            4 => ['first', 'second', 'third', 'fourth'],
            6 => ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'],
            8 => ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth'],
        ];

        $payments = $course->payments()
            ->with('student')
            ->select($paymentColumns);


        if (isset($durationMap[$course->duration])) {
            $payments->select(array_merge($paymentColumns, $durationMap[$course->duration]));
        }

        return response()->json(['data' => $payments->get()->map(function ($payment) {
            return [
                'id' => $payment->id,
                'student_id' => $payment->student_id,
                'student' => $payment->student,
                'months' => [
                    $payment->first,
                    $payment->second,
                    $payment->third,
                    $payment->fourth,
                    $payment->fifth,
                    $payment->sixth,
                    $payment->seventh,
                    $payment->eighth,
                ]
            ];
        })]);
    }
}
