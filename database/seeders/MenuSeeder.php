<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::factory()->create([
            'food_name' => 'French Onion Soup',
            'food_price' => 8,
            'food_type' => 0,
        ]);

        Menu::factory()->create([
            'food_name' => 'Meatball Soup',
            'food_price' => 10,
            'food_type' => 0,
        ]);

        Menu::factory()->create([
            'food_name' => 'Vegetable Curry Soup',
            'food_price' => 10,
            'food_type' => 0,
        ]);

        Menu::factory()->create([
            'food_name' => 'Mac & Cheese',
            'food_price' => 8,
            'food_type' => 1,
        ]);

        Menu::factory()->create([
            'food_name' => 'Roasted Sweet Potato Salad',
            'food_price' => 12,
            'food_type' => 1,
        ]);

        Menu::factory()->create([
            'food_name' => 'Green Curry Buddha Bowl',
            'food_price' => 14,
            'food_type' => 1,
        ]);

        Menu::factory()->create([
            'food_name' => 'Roasted Cauliflower and Hummus Bowl',
            'food_price' => 14,
            'food_type' => 1,
        ]);

        Menu::factory()->create([
            'food_name' => 'Mexican-style turkey burger',
            'food_price' => 14,
            'food_type' => 2,
        ]);

        Menu::factory()->create([
            'food_name' => 'Fried Chicken and Rice',
            'food_price' => 15,
            'food_type' => 2,
        ]);

        Menu::factory()->create([
            'food_name' => 'Roast duck with walnut and freekeh stuffing',
            'food_price' => 18,
            'food_type' => 2,
        ]);

        Menu::factory()->create([
            'food_name' => 'Beef Burger',
            'food_price' => 17,
            'food_type' => 3,
        ]);

        Menu::factory()->create([
            'food_name' => 'Beef Stew',
            'food_price' => 20,
            'food_type' => 3,
        ]);

        Menu::factory()->create([
            'food_name' => 'Beef Tenderloin in Mushroom Sauce',
            'food_price' => 25,
            'food_type' => 3,
        ]);

        Menu::factory()->create([
            'food_name' => 'Beef Steak with Fries',
            'food_price' => 30,
            'food_type' => 3,
        ]);

        Menu::factory()->create([
            'food_name' => 'Roast rack of pork with wild garlic stuffing',
            'food_price' => 20,
            'food_type' => 4,
        ]);

        Menu::factory()->create([
            'food_name' => 'Oven-baked pork chops',
            'food_price' => 20,
            'food_type' => 4,
        ]);

        Menu::factory()->create([
            'food_name' => 'Pork & pepper meatballs on parsnip mash',
            'food_price' => 23,
            'food_type' => 4,
        ]);

        Menu::factory()->create([
            'food_name' => 'Ice Cream (Chocolate, Vanilla)',
            'food_price' => 3,
            'food_type' => 5,
        ]);

        Menu::factory()->create([
            'food_name' => 'Pancakes (Chocolate, Nutella, Jam)',
            'food_price' => 5,
            'food_type' => 5,
        ]);

        Menu::factory()->create([
            'food_name' => 'Brownies with Vanilla Ice Cream',
            'food_price' => 5,
            'food_type' => 5,
        ]);

        Menu::factory()->create([
            'food_name' => 'Water',
            'food_price' => 1,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Sparkling Water',
            'food_price' => 1,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Orange Juice',
            'food_price' => 2,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Coca Cola',
            'food_price' => 2,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Sprite',
            'food_price' => 2,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Fanta',
            'food_price' => 2,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Espresso',
            'food_price' => 2,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Latte',
            'food_price' => 3,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Cappuccino',
            'food_price' => 3,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Duff Beer',
            'food_price' => 3,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'Red Wine',
            'food_price' => 4,
            'food_type' => 6,
        ]);

        Menu::factory()->create([
            'food_name' => 'White Wine',
            'food_price' => 4,
            'food_type' => 6,
        ]);
    }
}
