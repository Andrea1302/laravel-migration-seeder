<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(),
        'date_of_publication'=>$faker->dateTime(),
        'produced_by'=>$faker->company(),
        'views_on_spotify'=>$faker->numberBetween(0, 10000000000),
        'single'=> $faker->boolean()
    ];
});
