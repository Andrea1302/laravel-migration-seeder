<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name_of_album'=>$faker->jobTitle(),
        'date_of_publication' =>$faker->dateTime(),
        'genre'=>$faker->word()
    ];
});
