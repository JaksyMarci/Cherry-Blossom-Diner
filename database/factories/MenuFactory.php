<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'food_name' => fake()->unique()->word(2, true),
            'food_price' => fake()->numberBetween(400, 12000),
            'food_type' => fake()->numberBetween(0, 6) // soup, vegetarian, poultry, beef, pork, dessert, drink
        ];
    }
}
