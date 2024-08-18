<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carTitle'=> fake()->randomElement(['pmw', 'marcedes']),
            'image' => basename(fake()->image(public_path('assets/images/car'))), 
            'published' => fake()->numberBetween(0, 1),
            'category_id' => fake()->numberBetween(1, 5),
            'price' => fake()->numberBetween(100, 1000),
            'discription' => fake()->text(),
        ];
    }
}
