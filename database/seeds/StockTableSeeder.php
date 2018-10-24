<?php

use Illuminate\Database\Seeder;
use App\Stock;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Stock::class, 100)->create();
    }
}
