<?php

namespace App\Http\Resources\v1\Teacher;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DavomatResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'is_active' => $this->lessons()->where('id', $request->lesson->id)->first()?->pivot->is_active,
        ];
    }
}
