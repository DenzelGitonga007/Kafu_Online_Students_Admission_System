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
        Schema::create('emergency_contact_details', function (Blueprint $table) {
            $table->id();

            // Relationship
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            
            //  Emergency Contact
            $table->string('emerge_con_surname');
            $table->string('emerge_con_first_name');
            $table->string('emerge_con_initial_name');
            $table->string('emerge_con_national_id');
            $table->string('emerge_con_email');
            $table->string('emerge_con_phone');
            $table->string('emerge_con_city');
            $table->string('emerge_con_pob');

            
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
        Schema::dropIfExists('emergency_contact_details');
    }
};
