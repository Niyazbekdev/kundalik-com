<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_id' => rand(1,2),
            'name' => fake()->name(),
            'date' => fake()->dateTime(),
        ];
    }
}
