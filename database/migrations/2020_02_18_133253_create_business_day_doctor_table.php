<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDayDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_day_doctor', function (Blueprint $table) {

            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')
                ->on('doctors')->onDelete('cascade');

            $table->unsignedTinyInteger('business_day_id');
            $table->foreign('business_day_id')->references('id')
                ->on('business_days')->onDelete('cascade');

            $table->string('start_at')->nullable();
            $table->string('end_at')->nullable();

            $table->unique(['doctor_id', 'business_day_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_day_doctor');
    }
}
