<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'graduation' => 'Belgrade University Medical School',
        'graduation_year' => today()->subYears(random_int(0, 50))->year,
        'color' => $faker->unique()->hexcolor,
    ];
});
