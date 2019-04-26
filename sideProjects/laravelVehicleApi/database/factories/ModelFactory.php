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

$factory->define(App\Maker::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word(),
		'phone' => $faker->randomDigit(5)
    ];
});


$factory->define(App\Vehicle::class, function (Faker\Generator $faker) {
    return [
        'color' => $faker->safeColorName(),
		 'power' => $faker->randomNumber(), 
			'capacity' =>$faker->randomFloat(), 
			'speed' => $faker->randomFloat(),

			'maker_id'=>$faker->numberBetween(1,5)
    ];
});
