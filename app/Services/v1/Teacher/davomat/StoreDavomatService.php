<?php

namespace App\Services\v1\Teacher\davomat;

use App\Http\Requests\v1\StoreDavomatRequest;
use App\Models\Lesson;

class StoreDavomatService
{
    public function execute(StoreDavomatRequest $request, Lesson $lesson)
    {
        $data = $request->validated();
        foreach ($data['students'] as $student){
            $lesson->students()->attach($student, ['is_active' => true]);
        }
        return response()->successfull();
    }
}
