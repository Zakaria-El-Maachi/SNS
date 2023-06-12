<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\craftsman>
 */
class craftsmanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => $this->faker->company(),
            'company_address' => $this->faker->city(),
            'description' => $this->faker->paragraph(3),
            'image' => $this->faker->randomElement(['uploads/plumber.avif', 'uploads/mechanic.jpeg', 'uploads/electrician.webp'])
        ];
    }
}
