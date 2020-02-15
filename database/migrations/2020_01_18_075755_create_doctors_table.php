<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('graduation', 199);
            $table->year('graduation_year');
            $table->string('board_certification', 199)->nullable();
            $table->year('certification_year')->nullable();
            $table->string('academic_title', 199)->nullable();
            $table->text('academic_affiliation', 500)->nullable();
            $table->text('hospital_affiliation', 500)->nullable();
            $table->text('administrative_position', 300)->nullable();
            $table->text('training', 1000)->nullable();
            $table->string('color', 7);
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
        Schema::dropIfExists('doctors');
    }
}
