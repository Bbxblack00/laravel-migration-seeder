<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'name' => $faker -> word,
        'description' => $faker -> text($maxNbChars = 128),
        'date' => $faker -> dateTime($max = 'now', $timezone = null),
        'vote' => $faker -> numberBetween($min = 0, $max = 5),
    ];
});
