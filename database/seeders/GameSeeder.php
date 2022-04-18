<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => 'Pokemon',
        ]);

        Game::create([
            'name' => 'Yu-Gi-Oh',
        ]);

        Game::create([
            'name' => 'Digimon',
        ]);

        Game::create([
            'name' => 'Magic! The Gathering',
        ]);
    }
}
