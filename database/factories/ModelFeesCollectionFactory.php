<?php

use App\Model\Student;
use Faker\Generator as Faker;

$factory->define(App\Model\FeesCollection::class, function (Faker $faker) {
    return [
        'student_id' => function(){
            return Student::all()->random();
        },
        'feesAmount' => $faker->numberBetween(50, 2500000),
        'feesStatus' => $faker->word,
        'paidAmount' => $faker->numberBetween(50, 2500000),
        'dueAmount' => $faker->numberBetween(50, 2500000),

    ];
});
