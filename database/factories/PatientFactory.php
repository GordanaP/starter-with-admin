<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'doctor_id' => Doctor::inRandomOrder()->first()->id,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'medical_record' => $faker->randomNumber,
        'birthday' => $faker->date($format = 'Y-m-d', $max = \Carbon\Carbon::now()->subYears(20)),
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
    ];
});
