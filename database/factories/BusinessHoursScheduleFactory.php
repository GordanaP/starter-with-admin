<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BusinessHoursSchedule;
use Faker\Generator as Faker;

$factory->define(BusinessHoursSchedule::class, function (Faker $faker) {
    return [
        'open' => '09:00',
        'close' => '20:00',
    ];
});
