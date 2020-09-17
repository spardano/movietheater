<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\TicketsModel::class, function (Faker $faker) {
    return [
        'show_id' => $faker->numberBetween(3, 32),
        'ticket_type' => $faker->numberBetween(1, 2)
    ];
});
