<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\review>
 */
class reviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'request_id' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph(5),
            'rating' => $this->faker->randomElement([1, 2, 3, 4, 5])
        ];
    }
}
