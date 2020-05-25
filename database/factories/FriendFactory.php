<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\friend;
use Faker\Generator as Faker;

$factory->define(friend::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'name' => $faker->userName,
        'username' => $faker->userName,
    ];
});