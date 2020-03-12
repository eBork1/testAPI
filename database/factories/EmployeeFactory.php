<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->randomNumber($nbDigits = 2, $strict = false),
        'favorite_color' => $faker->safeColorName,
        'job_title' => $faker->jobTitle,
    ];
});
