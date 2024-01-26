<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'altitude' => fake()->randomFloat(6,6),
            'longitude' => fake()->randomFloat(6,6),
            'temperature' => fake()->randomDigit(),
            'humidity'=> fake()->randomDigit(),
        ];
    }
}
