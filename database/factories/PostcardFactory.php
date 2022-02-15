<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;

$factory->define(Postcard::class, function (Faker $faker) {
    return [
        'sender' => $faker -> firstName().' '.$faker -> lastName(),
        'address' => $faker -> address(),
        'text' => $faker -> paragraph(),
        // 'image' => $faker -> null,
    ];
});
