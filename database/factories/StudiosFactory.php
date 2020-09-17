<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\StudiosModel::class, function (Faker $faker) {
    return [
        'studio_name' => $faker->name
    ];
});
