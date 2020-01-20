<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorExpertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_expertise', function (Blueprint $table) {
            $table->unsignedInteger('doctor_id')->index();
            $table->foreign('doctor_id')->references('id')->on('doctors')
                ->onDelete('cascade');

            $table->unsignedInteger('expertise_id')->index();
            $table->foreign('expertise_id')->references('id')->on('expertises')
                ->onDelete('cascade');

            $table->primary(['doctor_id', 'expertise_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_expertise');
    }
}
