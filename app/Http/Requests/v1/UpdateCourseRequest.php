<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'name' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'count_student' => 'required',
        ];
    }
}
