<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;
use App\Remito;

class Proveedor extends Model
{
   protected $table='proveedores';
   protected $fillable = ['nombre','descripcion','telefono','estado', 'email'];


    public function articulo()
   {
   	return $this->hasMany(Articulo::class);
   }
    public function remito()
   {
   	return $this->hasMany(Remito::class);
   }



}