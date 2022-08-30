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
        Schema::create('parent_details', function (Blueprint $table) {
            $table->id();

            // Relationship
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            
            // Additional fields
            // Father
            $table->string('father');
            $table->string('father_surname')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_national_id')->nullable();
            $table->string('father_occupation')->nullable();

            // Mother
            $table->string('mother');
            $table->string('mother_surname')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_national_id')->nullable();
            $table->string('mother_occupation')->nullable();

            //  Guardian
            $table->string('guardian_surname')->nullable();
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_initial_name')->nullable();
            $table->string('guardian_national_id')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_city')->nullable();
            $table->string('guardian_pob')->nullable();
            $table->string('guardian_occupation')->nullable();





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
        Schema::dropIfExists('parent_details');
    }
};
