<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Proveedor::class, function (Faker $faker) {
    
    return [
        'nombre'  => $faker->firstName,
        'descripcion' => $faker->text(15),
        'telefono' => $faker->phoneNumber(),
        'estado' => $faker->randomElement(array ('0', '1')),
        'email' => $faker->unique()->safeEmail,
        
    ];
});
