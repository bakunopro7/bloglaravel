<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        //estrctura de la tabla  y caracteres de 500 en el faker que sale por parametros
        'user_id'=>rand(1,30),//crea 30 usuarios
        'category_id'=>rand(1,20),//Crea 20categorias
        'name'=>'title',
        'slug'=>str_slug($title),
        'excerpt'=>$faker->text(200),
        'body'=>$faker->text(500),
        'file'=>$faker->imageUrl($width = 1200,$height = 400),
        'status'=>$faker->randomElement(['BORRADOR','PUBLICADO']),
    ];
});
