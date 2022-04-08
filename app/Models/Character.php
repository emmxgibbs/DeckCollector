<?php

namespace App\Models;

use App\Models\Pokemon\Set;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function games() {
        return $this->belongsTo(Game::class);
    }

    public function sets() {
        return $this->belongsToMany(Set::class);
    }

    public function cards() {
        return $this->belongsToMany(Card::class);
    }    
}
