<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;

class Venta extends Model
{
  protected $table='ventas';

	public function ventaA()
	{
		return $this->belongsTo(Articulo::class, 'idArt');
	}

}
