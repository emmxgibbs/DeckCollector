<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for($i = 0; $i < 10; $i++) {
            User::create([
                'username' => $faker->userName(40),
                'password' => Hash::make('password'),
                'email' => $faker->freeEmail(),
                'name' => $faker->name(),
            ]);
        }
    }
}