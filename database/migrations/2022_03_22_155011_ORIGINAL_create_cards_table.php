<?php

use App\Models\Card;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Pokemon\Models\Set;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('cards', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->string('title');
        //     $table->foreignIdFor(Set::class);
        //     $table->integer('card_number');
        //     $table->integer('generation');
        //     $table->string('img');
        // });

        // Schema::create('card_user', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->foreignIdFor(User::class);
        //     $table->foreignIdFor(Card::class);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('cards');
        // Schema::dropIfExists('card_user');
    }
};
