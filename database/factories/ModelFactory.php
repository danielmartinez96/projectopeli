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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Pelicula::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->name,
        'sipnopsis' => $faker->paragraph,
        'lanzamiento' =>$faker->randomDigit,
        'url_imagen' => $faker->imageUrl,

    ];
});


    $factory->define(App\Generopeli::class, function (Faker\Generator $faker) {
        return [
            'id_pelicula' => $faker->numberBetween(1,20),
            'id_genero' => $faker->numberBetween(1,8),
        ];
});

$factory->define(App\Comentario::class, function (Faker\Generator $faker) {
    return [
        'asunto'=> $faker->text,
        'descripcion' => $faker->paragraph,
        'id_pelicula' => $faker->numberBetween(1,20),
        'id_user' => $faker->numberBetween(1,20),
    ];
});
