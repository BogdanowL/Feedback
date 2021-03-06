<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
            'clientName' => $faker->name(),
            'clientEmail' => $faker->unique()->email,
            'clientPhoneNumber' => $faker->phoneNumber,
    ];
});
