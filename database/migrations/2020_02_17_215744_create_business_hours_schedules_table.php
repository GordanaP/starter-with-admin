<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessHoursSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_hours_schedules', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('day');
            $table->unsignedTinyInteger('day_iso')->nullable();
            $table->time('open');
            $table->time('close');
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
        Schema::dropIfExists('business_hours_schedules');
    }
}
