<?php

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
        Schema::create('game_and_sport_details', function (Blueprint $table) {
            $table->id();

            // Relationship
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            
            // Additional Fields
            $table->string('games_and_sports');
            $table->string('games_representation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_and_sport_details');
    }
};
