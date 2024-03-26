<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StoreDavomatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'students' => 'required|array',
            'students.*.student_id' => 'required_unless:students,null',
            'students.*.is_active' => 'required_unless:students,null',
        ];
    }
}
