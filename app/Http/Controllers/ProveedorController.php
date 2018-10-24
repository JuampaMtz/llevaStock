<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Proveedor;



class ProveedorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function prov ()
    {
        $proveedores=Proveedor::where('estado',1)->get();        
        return view('proveedores',compact('proveedores'));
    }

    public function insertarProveedor (Request $request)
    {
    $proveedores= new Proveedor;

    $proveedores-> nombre= $request->nombre;
    $proveedores-> descripcion= $request->descripcion;
    $proveedores-> telefono= $request->telefono;
    $proveedores-> email= $request->email;
    $proveedores-> estado= '1';
    $proveedores->save();
    return redirect('proveedores');
    }


    public function darDeBaja($id)
    {
        $proveedores = Proveedor::find($id);
        $proveedores-> estado= '0';
        $proveedores->save();
        return redirect()->route('proveedores');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $proveedores= Proveedor::find($id);
        
        return view('editP', compact('proveedores'));
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
        $proveedores = Proveedor::find($id);
        $proveedores->fill($request->all());
        $proveedores->save();
        return redirect()->route('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
