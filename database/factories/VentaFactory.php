<?php

use Faker\Generator as Faker;

$factory->define(App\Venta::class, function (Faker $faker) {
    
    return [
        'costo'  => $faker->randomFloat(2,1,99999999),
        'fecha' => $faker->date('Y-m-d'),
        'cantidad' => $faker->numberBetween(1,200),
        'idArt' => App\Articulo::all()->random()->id,
        
    ];
});
