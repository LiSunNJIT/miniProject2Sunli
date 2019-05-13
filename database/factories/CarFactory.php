<?php

use App\Cars;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

    $factory->define(App\Cars::class, function (Faker $faker) {

    return [

        'make' => $faker->randomElement(['ford' ,'honda', 'toyota']),
        'model' => $faker->company,
        'year' => $faker->year,

    ];
});