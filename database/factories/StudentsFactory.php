<?php

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'DOB' => $faker->date(),
        'EMBG' => $faker->unique()->ean13
    ];
});
