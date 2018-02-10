<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        //estrctura de la tabla  y caracteres de 500 en el faker que sale por parametros
        'name'=>'title',
        'slug'=>str_slug($title),
        'body'=>$faker->text(500),
    ];
});
