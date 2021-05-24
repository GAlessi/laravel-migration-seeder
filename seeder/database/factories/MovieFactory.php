<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'original_title' => $faker -> word,
        'nationality' => $faker -> country,
        'date' => $faker -> dateTime,
        'vote' => $faker -> numberBetween( 0, 10)
    ];
});
