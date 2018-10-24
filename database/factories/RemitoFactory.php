<?php

use Faker\Generator as Faker;

$factory->define(App\Remito::class, function (Faker $faker) {
    
    return [
		'fecha' => $faker->date('Y-m-d'),
		'nroRem' => $faker->numberBetween(11123211,99999999),
		'estado' => $faker->randomElement(array ('0', '1')),
        'precioTotal'  => $faker->randomFloat(2,1,99999999),
        'idProv' => App\Proveedor::all()->random()->id,
        
    ];
});
