<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use App\Patient;
use App\Appointment;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Appointment::class, function (Faker $faker) {
    return [
        'doctor_id' => Doctor::inRandomOrder()->first()->id,
        'patient_id' => Patient::inRandomOrder()->first()->id,
        'start_at' => Carbon::tomorrow()->addDays(rand(1,5))->startOfHour()->addHours(rand(9,15))
    ];
});
