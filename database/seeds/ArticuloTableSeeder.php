<?php

use Illuminate\Database\Seeder;
use App\Articulo;

class ArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Articulo::class, 100)->create();
    }
}
