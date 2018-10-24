<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Proveedor;
use App\Stock;

class Remito extends Model
{
	protected $table='Remitos';
	protected $fillable = ['fecha','nroRem','precioTotal','estado','idProv'];

    public function proveedoreRm()
   {
   	return $this->belongsTo(Proveedor::class, 'idProv');
   }
    public function renglonRm()
   {
   	return $this->hasMany(Stock::class);
   }

}
