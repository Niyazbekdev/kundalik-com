<?php

namespace App\Http\Resources\v1\student;

use App\Http\Resources\v1\Course\CourseResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
            $this->mergeWhen($request->routeIs('students.index'), [
                'course' => new CourseResource($this->course),
            ])
        ];
    }
}
