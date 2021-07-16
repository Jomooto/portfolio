<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Technology::class, function (Faker $faker) {
    return [
        'name' => $faker->languageCode,
        'icon_url' => $faker->imageUrl(90,90)
    ];
});
