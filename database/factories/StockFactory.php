<?php

use Faker\Generator as Faker;

$factory->define(App\Stock::class, function (Faker $faker) {
    
    return [
        'cantidad' => $faker->numberBetween(1,200),
        'costoIndividual' => $faker->randomFloat(2,1,9999),
        'idArt' => App\Articulo::all()->random()->id,        
        'idRem' => App\Remito::all()->random()->id,
        
    ];
});
