<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => ['required',Rule::unique('users', 'email')->ignore($this->teacher)],
            'phone' => ['required',Rule::unique('users', 'phone')->ignore($this->teacher)],
        ];
    }
}
