<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use Faker\Factory as Faker1;

//$factory->define(App\Servico::class, function (Faker $faker) {
//    return [
//        //
//
//        'nome' => $faker->nome,
//        'descricao' => $faker->descricao,
//
//
//    ];
//});
$factory->define(App\Servico::class, function ($faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->sentence,
        'categoria_id' => function () {
            return factory(App\Categoria::class)->create([
                'designacao' =>Faker1::create()->word,
                'descricao'=>Faker1::create()->sentence
            ])->id;
        },
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
