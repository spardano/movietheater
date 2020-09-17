<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\SeatsModel::class, function (Faker $faker) {
    return [
        'seat_row' => $faker->randomLetter,
        'seat_number' => $faker->numberBetween('1', '20'),
        'studio_id' => $faker->numberBetween('1', '7')
    ];
});
