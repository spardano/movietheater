<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ShowsModel::class, function (Faker $faker) {
    //creating data dummy
    return [
        'start_time' => $faker->time(),
        'end_time' => $faker->time(),
        'start_date' => $faker->date(),
        'end_date' => $faker->date(),
        'movie_id' => $faker->numberBetween(1, 50),
        'studio_id' => $faker->numberBetween(1, 7)
    ];
});
