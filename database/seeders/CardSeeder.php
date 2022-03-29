<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use Faker\Generator;
use App\Models\User;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for ($i=0; $i < 1000; $i++)
            Card::create([
                'card_title' => $faker->text(30),
                'set_name' => $faker->text(20),
                'card_number' => rand(1, 900),
                'generation' => rand(1, 11),
                'img' => $faker->url()
            ]);

        $users = User::all();


        foreach(Card::all() as $card) {
            $randomUsers = $users->random(rand(1, 20));

            foreach($randomUsers as $user) {
                $user->cards()->attach($card->id);
            }
        }
    }
}