<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first' => 'nullable',
            'second' => 'nullable',
            'thrid' => 'nullable',
            'fourth' => 'nullable',
            'fifth' => 'nullable',
            'sixth' => 'nullable',
            'seventh' => 'nullable',
            'eighth' => 'nullable',
        ];
    }
}
