<?php

namespace App\Models\Pokemon;

use App\Models\Card;
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

    public function cards() {
        return $this->belongsToMany(Card::class);
    }

}