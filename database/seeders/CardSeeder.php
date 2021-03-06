<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Pokemon\Set;
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
public function run()
    {
        for($i = 1; $i < 59; $i++)

        {
            $page = Http::get("https://api.pokemontcg.io/v2/cards", ['page' => $i]);
            $this->seedPage($page['data']);
        }

    $users = User::all();

    foreach(Card::all() as $card) {
        $randomUsers = $users->random(rand(1, 5));

        foreach($randomUsers as $user) {
            $user->cards()->attach($card->id);
        }
    }
}

private function seedPage($cards) {
    foreach($cards as $card)
    $this->seedCard($card);
}

private function seedCard($card) {
    if ($set = Set::where('tcg_id', $card['set']['id'])->first())
        {
            $params = array (
            'name' => $card['name'],
            'image' => Arr::get($card, 'images.small'),
            'image_large' => Arr::get($card, 'images.large'),
            'pokedex_number' => $card['nationalPokedexNumbers'][0] ?? 0,
            'hp' => $card['hp'] ?? '',
            'evolves_from' => $card['evolvesFrom'] ?? '',
            'types' => $card['types'][0] ?? '',
            'cardmarket' => Arr::get($card, 'cardmarket.prices.averageSellPrice', ''),
            );

        $set->cards()->create($params);
        }
    }
}
