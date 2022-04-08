<?php

namespace App\Models\Pokemon;

use App\Models\Card;
use App\Models\Character;
use App\Models\Game;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Set
 *
 * @package Pokemon\Models
 */
class Set extends Model
{
    protected $fillable = [
        'tcg_id',
        'name',
        'series',
        'released_at',
        'logo',
        'symbol',
    ];

    public function games() {
        return $this->belongsTo(Game::class);
    }

    public function cards() {
        return $this->belongsToMany(Card::class);
    }

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}