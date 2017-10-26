<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Admin\Canal::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'recurso' => $faker->word,
        'descricao' => $faker->sentence,
    ];
});
