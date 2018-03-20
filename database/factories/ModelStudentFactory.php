<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' =>$faker->address
    ];
});
