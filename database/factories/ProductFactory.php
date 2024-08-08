<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->randomElement(['phone', 'tshirt']),
            'image' => basename(fake()->image(public_path('assets/images/product'))), 
            'like' => fake()->numberBetween(0, 10),
            'price' => fake()->numberBetween(100, 1000),
            'discription' => fake()->text(),
        ];
    }
}
