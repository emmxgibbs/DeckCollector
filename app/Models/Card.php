<?php

namespace App\Models;

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
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}