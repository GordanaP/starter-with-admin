<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('doctor_id')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors')
                ->onDelete('set NULL');

            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->date('birthday');
            $table->string('street_address', 199);
            $table->string('city', 100);
            $table->string('country')->default('RS');
            $table->string('phone');
            $table->string('mrn')->unique();
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
        Schema::dropIfExists('patients');
    }
}
