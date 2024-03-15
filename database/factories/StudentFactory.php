<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'year' => fake()->year(),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
