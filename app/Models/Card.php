<?php

namespace App\Models;

use App\Models\Pokemon\Pokemon;
use App\Models\Pokemon\Set;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Card extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
            'name',
            'image',
            'image_large',
            'hp',
            'evolves_from',
            'types',
            'cardmarket',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function games() {
        return $this->belongsTo(Game::class);
    }

    public function sets() {
        return $this->belongsToMany(Set::class);
    }

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}