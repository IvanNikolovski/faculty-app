<?php

use App\Course;
use App\Semester;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'ECTS' => $faker->numberBetween(0, 240),
        'description' => $faker->text(200),
        'semester_id' => function(){
        return Semester::all()->random();
    }
    ];
});
