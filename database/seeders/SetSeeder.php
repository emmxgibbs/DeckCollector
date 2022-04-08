<?php

namespace Database\Seeders;

use App\Models\Pokemon\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $sets = Http::get('https://api.pokemontcg.io/v2/sets');
        foreach($sets['data'] as $set)
            $this->seedSet($set);
    }

    private function seedSet($set) {
        $params = Arr::only($set, [
            'name',
            'series',
        ]);

        $params['released_at'] = $set['releaseDate'];
        $params['logo'] = $set['images']['logo'];
        $params['symbol'] = $set['images']['symbol'];
        $params['tcg_id'] = $set['id'];

        Set::create($params);
    }
}
