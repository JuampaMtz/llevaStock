<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Proveedor;
use App\Articulo;
use App\Venta;
use App\Stock;




class ArticuloController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function art()
    {


        $articulos = DB::select('SELECT articulos.*, 
                        IFNULL ((SELECT SUM(stock.cantidad) 
                                     FROM stock 
                                     where stock.idArt=articulos.id),0)
                    -
                        IFNULL((SELECT SUM(ventas.cantidad) 
                                FROM ventas 
                                where ventas.idArt=articulos.id), 0)                     

                              AS stockFinal,
                              proveedores.nombre as proveedorNombre
                                from articulos
                                INNER JOIN proveedores on proveedores.id = articulos.idProv');
                                



        $proveedores=Proveedor::pluck('nombre','id');
       
      //  $articulos = Articulo::where('estado',1)->get();
        
        return view('articulos',compact('proveedores','articulos'));
    }
    
    public function insertarArticulo (Request $request)
    {
    $articulos= new Articulo;

    $articulos-> nombre= $request->nombre;
    $articulos-> marca= $request->marca;
    $articulos-> descripcion= $request->descripcion;
    $articulos-> precio= $request->precio;
    $articulos-> estado= '1';
    $articulos-> idProv= $request->idProv;
    $articulos->save();
    return redirect('articulos');
    }




    public function darDeBaja($id)
    {
        $Articulos = Articulo::find($id);
        $Articulos-> estado= '0';
        $Articulos->save();
        return redirect()->route('articulos');
    }



    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        //
    }



    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        
        $proveedores=Proveedor::pluck('nombre','id');
        
        $articulos= Articulo::find($id);
        
        return view('editA', compact('articulos', 'proveedores'));
    }

    
    public function update(Request $request, $id)
    {
        $Articulos = Articulo::find($id);
        $Articulos->fill($request->all());
        $Articulos->save();
        return redirect()->route('articulos');
    }


    public function destroy($id)
    {
        Articulo::destroy($id);
        return redirect('articulos');
    }
}
