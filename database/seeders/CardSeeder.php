<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Pokemon\Set;
use Faker\Generator;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for($i = 1; $i < 59; $i++)
        {
            $page = Http::get("https://api.pokemontcg.io/v2/cards", ['page' => $i]);
            $this->seedPage($page['data']);
        }
        



    //     for ($i=0; $i < 53; $i++)
    //         Card::create([
    //             'card_title' => $faker->text(30),
    //             'set_name' => $faker->text(20),
    //             'card_number' => rand(1, 53),
    //             'generation' => rand(1, 9),
    //             'img' => $faker->url()
    //         ]);

    // //https://api.pokemontcg.io/v2/cards/basep-1
    // //https://api.pokemontcg.io/v2/cards/basep-53

    // //use these 53 for app purposes


    //     $users = User::all();


    //     foreach(Card::all() as $card) {
    //         $randomUsers = $users->random(rand(1, 5));

    //         foreach($randomUsers as $user) {
    //             $user->cards()->attach($card->id);
    //         }
    //     }
    }


    private function seedPage($cards)
    {
        foreach($cards as $card)
            $this->seedCard($card);
    }


    private function seedCard($card) 
    {
        if ($set = Set::where('tcg_id', $card['set']['id'])->first())
        {
            $params = [
                'image' => Arr::get($card, 'images.small'),
                'image_large' => Arr::get($card, 'images.large'),
                'name' => $card['name']
            ];

            $set->cards()->create($params);
        }
    }
}