<?php

use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        //
        //'id' => str_random(100),
        'name' => $faker->name,
        'num_of_days' => $faker->randomNumber($nbDigits = 2),
        'anchor_day' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'weather_factor_id' => $faker->unique()->randomNumber($nbDigits = 4),
        'season_factor_id' => $faker->unique()->randomNumber($nbDigits = 4),
    ];
});
