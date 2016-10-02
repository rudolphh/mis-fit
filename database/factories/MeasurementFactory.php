<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Measurement::class, function (Faker\Generator $faker) {

	 
    return [
        'weight' => $faker->randomFloat(5, 0.00, 500.00), // 48.8932,
        'neck' => $faker->randomFloat(5, 0.00, 50.00),
        'waist' => $faker->randomFloat(5, 0.00, 150.00),
        'hip' =>  '0'
    ];
});
