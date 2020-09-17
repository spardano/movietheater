<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PaymentsModel::class, function (Faker $faker) {
    return [
        'payment_date' => $faker->date(),
        'qty' => $faker->numberBetween(1, 10),
        'ticket_number' => $faker->numberBetween(1, 2),
        'costumer_id' => $faker->numberBetween(1, 100),
        'staff_id' => $faker->numberBetween(1, 5),
        'payment_desc' => $faker->text()
    ];
});
