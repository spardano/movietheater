<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\MoviesModel::class, function (Faker $faker) {
    //creating data dummy
    return [
        'movie_title' => $faker->text(45),
        'genre'        => $faker->text(20),
        'rating'       => $faker->randomNumber(3),
        'length'       => $faker->numberBetween(90, 160) . ' minutes',
        'year'         => $faker->year(),
        'stars'        => $faker->name,
        'directors'    => $faker->name,
        'synopsis'     => $faker->text(200)
    ];
});
