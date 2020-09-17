<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CostumerModel;
use Faker\Generator as Faker;

$factory->define(App\CostumerModel::class, function (Faker $faker) {
    return [
        'costumer_name' => $faker->name,
        'costumer_phoneNumber' => $faker->phoneNumber,
        'costumer_email' => $faker->email
    ];
});
