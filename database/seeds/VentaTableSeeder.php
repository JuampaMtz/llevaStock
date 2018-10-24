<?php

use Illuminate\Database\Seeder;
use App\Venta;

class VentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Venta::class, 100)->create();
    }
}
