<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CraftsmanService>
 */
class CraftsmanServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'craftsman_id' => $this->faker->numberBetween(1, 6),
            'service_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
