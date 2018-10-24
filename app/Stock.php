<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;
use App\Remito;

class Stock extends Model
{
  protected $table='stock';

  protected $fillable = ['cantidad','costoIndividual','idArt','idRem'];

    public function articulo_renglon()
   {
   	return $this->belongsTo(Articulo::class, 'idArt');
   }
    public function remito_renglon()
   {
   	return $this->belongsTo(Remito::class, 'idRem');
   }


}
