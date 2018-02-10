<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        //estrctura de la tabla  y caracteres de 500 en el faker que sale por parametros
        'name'=>'title',//se combierte cada letra en ul amigable
        'slug'=>str_slug($title),
    ];
});
