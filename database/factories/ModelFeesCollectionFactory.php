<?php

use App\Model\Student;
use Faker\Generator as Faker;

$factory->define(App\Model\FeesCollection::class, function (Faker $faker) {
    return [
        'student_id' => function(){
            return Student::all()->random();
        },
        'feesAmount' => $faker->numberBetween(1000, 1000),
        'paidAmount' => $faker->numberBetween(0, 1000),

    ];
});
