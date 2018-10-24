<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proveedor;
use App\Stock;
use App\Venta;

class Articulo extends Model
{
    protected $table='articulos';
    protected $fillable = ['nombre','marca','descripcion', 'precio','estado', 'idProv'];

    public function proveedore()
   {
   	return $this->belongsTo(Proveedor::class, 'idProv');
   }
    public function remitoA()
   {
   	return $this->hasMany(Remito::class);
   }
    public function articuloV()
   {
    return $this->hasMany(Venta::class);
   }
}