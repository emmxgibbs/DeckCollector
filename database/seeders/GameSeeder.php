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
            'name' => 'Yu-Gi-Oh',
            'name' => 'Digimon',
            'name' => 'Magic! The Gathering',
        ]);
    }
}
