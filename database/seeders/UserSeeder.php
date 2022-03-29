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
        for($i = 0; $i < 100; $i++) {

            User::create([
                'username' => $faker->userName(40),
                'password' => $faker->password(),
                'email' => $faker->freeEmail(),
                'name' => $faker->name(),
            ]);

        }

        // $users = User::all();

        // foreach(Card::all() as $card) {
        //     // $randomUser = $user->random(rand(1, 100));

        //     foreach($users as $user) {
        //         $user->cards()->attach($card->id);
        //     }
        //}
    }
}