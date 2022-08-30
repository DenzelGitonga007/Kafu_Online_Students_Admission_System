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
        Schema::create('next_of_kin_details', function (Blueprint $table) {
            $table->id();

            // Relationship
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            // Additional fields
            //  Next of Kin
            $table->string('nxtk_surname');
            $table->string('nxtk_first_name');
            $table->string('nxtk_initial_name');
            $table->string('nxtk_national_id');
            $table->string('nxtk_email');
            $table->string('nxtk_phone');
            $table->string('nxtk_city');
            $table->string('nxtk_pob');


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
        Schema::dropIfExists('next_of_kin_details');
    }
};
