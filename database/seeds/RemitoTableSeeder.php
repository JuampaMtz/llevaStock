<?php

use Illuminate\Database\Seeder;
use App\Remito;

class RemitoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Remito::class, 100)->create();
    }
}
