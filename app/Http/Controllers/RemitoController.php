<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Remito;
use App\Proveedor;

class RemitoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $proveedores=Proveedor::pluck('nombre','id');
       
        $remitos = Remito::where('estado',1)->get();
        
        return view('remitos',compact('proveedores','remitos'));
    }


    public function insertarRemito(Request $request)
    {
    $remitos= new Remito;

    $remitos-> nroRem= $request->nroRem;
    $remitos-> fecha= $request->fecha;
    $remitos-> precioTotal= $request->precioTotal;
    $remitos-> estado= '1';
    $remitos-> idProv= $request->idProv;
    $remitos->save();
    return redirect('remitos');
    }

    public function darDeBaja($id)
    {
        $remitos = Remito::find($id);
        $remitos-> estado= '0';
        $remitos->save();
        return redirect()->route('remitos');
    }



    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedores=Proveedor::pluck('nombre','id');
        
        $remitos= Remito::find($id);
        
        return view('editRem', compact('remitos', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $remitos = Remito::find($id);
        $remitos->fill($request->all());
        $remitos->save();
        return redirect()->route('remitos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Remito::destroy($id);
        return redirect('remitos');
    }
}
