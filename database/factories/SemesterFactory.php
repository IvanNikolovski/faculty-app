<?php

use App\Semester;
use Faker\Generator as Faker;

$factory->define(Semester::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'season' => $faker->unique()->numerify('######')
    ];
});