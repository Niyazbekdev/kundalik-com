<?php

namespace App\Http\Resources\v1\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'role_id' => $this->role_id,
            'phone' => $this->phone,
        ];
    }
}
