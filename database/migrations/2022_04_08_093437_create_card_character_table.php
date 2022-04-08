<?php

use App\Models\Card;
use App\Models\Character;
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
        Schema::create('card_character', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Card::class);
            $table->foreignIdFor(Character::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_character');
    }
};
