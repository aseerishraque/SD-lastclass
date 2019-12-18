<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'|'female'),
        'email' => $faker->companyEmail,
        'salary' => $faker->numberBetween($min = 5000, $max = 8000),
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
