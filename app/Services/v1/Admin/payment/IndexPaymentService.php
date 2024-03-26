<?php

namespace App\Services\v1\Admin\payment;

use App\Models\Course;

class IndexPaymentService
{
    public function execute(Course $course)
    {
        $payments = null;
        if ($course['duration'] == 1)
        $payments = $course->payments()
            ->select('id', 'id', 'student_id', 'first')
            ->get();

        if ($course['duration'] == 2)
            $payments = $course
                ->payments()
                ->select('id', 'student_id', 'first', 'second')
                ->get();

        if ($course['duration'] == 3)
            $payments = $course
                ->payments()
                ->select('id', 'student_id', 'first', 'second', 'thrid')
                ->get();

        if ($course['duration'] == 4)
            $payments = $course
                ->payments()
                ->select('id', 'student_id', 'first', 'second', 'thrid', 'fourth')
                ->get();

        if ($course['duration'] == 6)
            $payments = $course
                ->payments()
                ->select('id', 'student_id', 'first', 'second', 'thrid', 'fourth', 'fifth', 'sixth')
                ->get();

        if ($course['duration'] == 8)
            $payments = $course
                ->payments()
                ->select('id', 'student_id', 'first', 'second', 'thrid', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth')
                ->get();

        return response()->collection(['data' => $payments]);
    }
}
