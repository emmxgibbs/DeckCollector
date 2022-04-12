<?php

use App\Models\Card;
use App\Models\Character;
use App\Models\Pokemon\Pokemon;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
    Schema::create('cards', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('name');
        $table->string('image');
        $table->string('image_large');
        $table->string('types');
        $table->string('evolves_from');
        $table->string('hp');
        $table->string('cardmarket');
        $table->integer('pokedex_number');
    });
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
    {
        Schema::dropIfExists('cards');
        Schema::dropIfExists('card_user');
    }
};