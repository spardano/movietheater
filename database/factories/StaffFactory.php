<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\StaffModel::class, function (Faker $faker) {
    return [
        'staff_name' => $faker->name,
        'staff_email' => $faker->email,
        'staff_password' => $faker->password(),
    ];
});
