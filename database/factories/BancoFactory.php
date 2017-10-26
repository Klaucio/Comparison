<?php

use Faker\Generator as Faker;

$factory->define(App\Banco::class, function (Faker $faker) {
    return [
        //
        'designacao' => $faker->unique()->word,
        'abreviatura' => $faker->toUpper($faker->word(4)),
        'logo'=>$faker->imageUrl(175, 175),
    ];
});