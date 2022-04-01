<?php

use App\Models\Card;
use App\Models\Pokemon\Set;
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
        Schema::create('card_set', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Card::class);
            $table->foreignIdFor(Set::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_set');
    }
};
