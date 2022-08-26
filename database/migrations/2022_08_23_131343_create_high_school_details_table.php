<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('high_school_details', function (Blueprint $table) {
            $table->id();

            // Addtional fields
            // First High School
            $table->string('first_high_school_name');
            $table->string('first_high_school_address');
            $table->string('first_high_school_town');
            $table->string('first_high_school_from_date');
            $table->string('first_high_school_to_date');

            // Second High School
            $table->string('second_high_school_name')->nullable();
            $table->string('second_high_school_address')->nullable();
            $table->string('second_high_school_town')->nullable();
            $table->string('second_high_school_from_date')->nullable();
            $table->string('second_high_school_to_date')->nullable();

            // Third High School
            $table->string('third_high_school_name')->nullable();
            $table->string('third_high_school_address')->nullable();
            $table->string('third_high_school_town')->nullable();
            $table->string('third_high_school_from_date')->nullable();
            $table->string('third_high_school_to_date')->nullable();


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
        Schema::dropIfExists('high_school_details');
    }
};
