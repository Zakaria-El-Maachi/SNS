<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class requestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'service_id' => $this->faker->numberBetween(1, 5),
            'craftsman_id' => $this->faker->numberBetween(1, 6),
            'description' => $this->faker->paragraph(5),
            'status' => 'finished',
            'location' => $this->faker->city(),
            'image' => $this->faker->randomElement(['storage/uploads/request1', 'storage/uploads/request2', 'storage/uploads/request3'])
        ];
    }
}
