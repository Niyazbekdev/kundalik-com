<?php

namespace App\Services\v1\Teacher\davomat;

use App\Http\Requests\v1\StoreDavomatRequest;
use App\Models\Lesson;

class StoreDavomatService
{
    public function execute(StoreDavomatRequest $request, Lesson $lesson)
    {
        $data = $request->validated();
        $lesson->update([
            'students' => $data,
        ]);

        $lesson->save();

        return response()->successfull();
    }
}
