<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@cbd.hu',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johnDoe@cbd.hu',
            'password' => Hash::make('password'),
            'is_admin' => 0
        ]);

        User::factory()->create([
            'name' => 'Robert Smith',
            'email' => 'robertSmith@cbd.hu',
            'password' => Hash::make('password'),
            'is_admin' => 0
        ]);

        User::factory()->create([
            'name' => 'Erica Clark',
            'email' => 'ericaClark@cbd.hu',
            'password' => Hash::make('password'),
            'is_admin' => 0
        ]);

        User::factory()->create([
            'name' => 'Edward Taylor',
            'email' => 'edwardTaylor@cbd.hu',
            'password' => Hash::make('password'),
            'is_admin' => 0
        ]);

        User::factory()->create([
            'name' => 'Nicole May',
            'email' => 'nicoleMay@cbd.hu',
            'password' => Hash::make('password'),
            'is_admin' => 0
        ]);
    }
}
