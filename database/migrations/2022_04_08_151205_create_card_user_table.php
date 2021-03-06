<?php

use App\Models\Card;
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
    Schema::create('card_user', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->foreignIdFor(User::class);
        $table->foreignIdFor(Card::class);
    });
}

/**
* Reverse the migrations.
* @return void
*/
public function down()
    {
        Schema::dropIfExists('card_user');
    }
};
