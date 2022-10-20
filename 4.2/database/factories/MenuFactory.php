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
            'foodName' => fake()->unique()->word(2, true),
            'foodPrice' => fake()->numberBetween(400, 12000),
            'foodType' => fake()->numberBetween(0, 5) // soup, vegetarian, poultry, beef, pork, dessert
        ];
    }
}
