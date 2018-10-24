<?php

use Faker\Generator as Faker;

$factory->define(App\Articulo::class, function (Faker $faker) {
    
    return [
        'nombre'  => $faker->randomElement(array ('Zapatilla', 'Botín', 'Medias', 'Canillera', 'Pelota Fútbol 5', 'Pelota de Tenis', 'Pelota de Golf', 'Raqueta de Tenis', 'Guantes de arquero', 'Tobilleras', 'Vendas')),
        'marca' => $faker->randomElement(array ('Nike', 'Adidas', 'Reebok', 'Puma', 'Fila', 'Olympikus', 'Topper', 'John Foos', 'Diadora', 'Kappa', 'Vans')),
        'descripcion' => $faker->randomElement(array ('Rojo', 'Azul', 'Limited Edition', 'Amarillo', 'Dorado', 'Verde', 'Negro', 'Blanco', 'Edición Ricardo Fort', 'Edición Mirtha Legrand', 'MIAMEEEE')),
        'estado' => $faker->randomElement(array ('0', '1')),
        'precio' => $faker->randomFloat(2,1,9999),
        'idProv' => App\Proveedor::all()->random()->id,
        
    ];
});
