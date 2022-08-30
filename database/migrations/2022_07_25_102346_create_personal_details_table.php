<?php

use Illuminate\Database\Eloquent\Factories\Relationship;
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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();

            // Additional fields
            // Personal Details

            // Relationship
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');


            $table->string("surname");
            $table->string("first_name");
            $table->string("last_name");
            $table->string('date');
            $table->string('gender');
            $table->string('national_id');
            $table->string('nationality');
            $table->string('religion');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('pob');

            
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            

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
        Schema::dropIfExists('personal_details');
    }
};
