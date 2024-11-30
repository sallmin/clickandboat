<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boat>
 */
class BoatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'longitude' => $this->faker->randomFloat(8, -180, 180),
            'skipping' => $this->faker->boolean(),
            'quick_booking' => $this->faker->boolean(),
        ];
    }
}
