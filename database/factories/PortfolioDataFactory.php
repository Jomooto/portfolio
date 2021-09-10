<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\PortfolioData;
use Faker\Generator as Faker;

$factory->define(PortfolioData::class, function (Faker $faker) {
    return [
        'portfolTitle' => $faker->realText($maxNbChars = 20, $indexSize = 1),
        'picture' => $faker->imageUrl(),
        'descriptionTitle' => $faker->realText($maxNbChars = 20, $indexSize = 1),
        'description' => $faker->realText($maxNbChars = 400, $indexSize = 3),
        'github' => $faker->url(),
        'linkedin' => $faker->url(),
        'contactEmail' => $faker->email(),
    ];
});
