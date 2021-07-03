<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
//use App\Project;
use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
//        'user_id' => factory(\App\User::class),
        'user_id' => rand(1,4),
        'name' => $faker->company(),
        'url' => $faker->url(),
        'picture_url' => $faker->imageUrl(),
    ];
});
