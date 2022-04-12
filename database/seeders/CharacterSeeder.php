<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Character;
use App\Models\Game;
use App\Models\Pokemon\Set;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class CharacterSeeder extends Seeder
{
    public function run()
{

    for($i = 0; $i < 1126; $i++) {
        $characters = Http::get('https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1126');

        foreach($characters['results'] as $character) {
            $this->seedCharacter($character);
        }
    }
}

    private function seedCharacter($character) {
        // get character data + pokedex number
        $characterData = Http::get($character['url']);
        $characterCards = Card::where('pokedex_number', $characterData['id']);
        $game = Game::where('name', 'Pokemon');

        // get cards corresponding to this pokedex number
        $params = Arr::only($character, ['name']);
        $params['game_id'] = $game['id'];
        $created = Character::create($params);

        // assoicate the newly created chracter with these cards
        foreach($characterCards as $card) {
            $created->cards()->attach($card->id);
        }
    }

}

// private function seedPokemon($pokemon) {
//     $params = Arr::only($pokemon, [
//     'name',
// ]);

// Character::create($params);


    // foreach(Card::all() as $card) {
    //     $randomUsers = $users->random(rand(1, 5));

    //     foreach($randomUsers as $user) {
    //         $user->cards()->attach($card->id);
    //     }
    // }
// }  

// private function seedPage($cards) {
//     foreach($cards as $card)
//     $this->seedCard($card);
// }

// private function seedCard($card) {
//     if ($set = Set::where('tcg_id', $card['set']['id'])->first())
//         {
//             $params = array (
//             'name' => $card['name'],
//             'image' => Arr::get($card, 'images.small'),
//             'image_large' => Arr::get($card, 'images.large'),
//             'hp' => $card['hp'] ?? '',
//             'evolves_from' => $card['evolvesFrom'] ?? '',
//             'types' => $card['types'][0] ?? '',
//             'cardmarket' => Arr::get($card, 'cardmarket.prices.averageSellPrice', '')
//             );

//         $set->cards()->create($params);
//         }
//     }
// }