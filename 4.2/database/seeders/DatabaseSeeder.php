<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Menu;
use \App\Models\Tables;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users[] = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'isAdmin' => true
        ]);

        $users[] = User::factory(5)->create();

        $menuItems = Menu::factory(15)->create();

        $tables = Tables::factory(10)->create();
    }
}
