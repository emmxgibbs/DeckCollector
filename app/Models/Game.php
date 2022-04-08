<?php

namespace App\Models;

use App\Models\Pokemon\Set;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function sets() {
        return $this->hasMany(Set::class);
    }

    public function cards() {
        return $this->hasMany(Card::class);
    }

    public function characters() {
        return $this->hasMany(Character::class);
    }
}
