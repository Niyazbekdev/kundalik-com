<?php

namespace App\Http\Resources\v1\Course;

use App\Http\Resources\v1\Teacher\TeacherResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,'duration' => $this->duration,
            'price' => $this->price,
            'count_student' => $this->count_student,
            'start' => $this->start,
            'days' => $this->days,
            'time' => $this->time,
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
            $this->mergeWhen($request->routeIs('courses.index'),[
                'teacher' => new TeacherResource($this->user),
            ]),
        ];
    }
}
