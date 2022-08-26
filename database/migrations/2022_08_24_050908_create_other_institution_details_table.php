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
        Schema::create('other_institution_details', function (Blueprint $table) {
            $table->id();


            // Additional fields
            // First Institution
            $table->string('first_institution_name')->nullable();
            $table->string('first_institution_specialization')->nullable();
            $table->string('first_institution_qualification')->nullable();
            
            // Second Institution
            $table->string('second_institution_name')->nullable();
            $table->string('second_institution_specialization')->nullable();
            $table->string('second_institution_qualification')->nullable();

            // First Institution
            $table->string('third_institution_name')->nullable();
            $table->string('third_institution_specialization')->nullable();
            $table->string('third_institution_qualification')->nullable();
            

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
        Schema::dropIfExists('other_institution_details');
    }
};
