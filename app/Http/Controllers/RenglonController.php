<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Remito;
use App\Articulo;

class RenglonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $remitos=Remito::pluck('nroRem','id');
        $articulos=Articulo::pluck('nombre','id');
        $renglones=Stock::all();

       // $joinARNG = Stock::with('articulo_renglon')->get();
       // $joinRR = Stock::with('remito_renglon')->get();
        
        return view('renglones',compact('articulos','remitos','renglones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertarRenglon(Request $request)
    {
    $renglones= new Stock;

    $renglones-> cantidad= $request->cantidad;
    $renglones-> costoIndividual= $request->costoIndividual;
    $renglones-> idArt= $request->idArt;
    $renglones-> idRem= $request->idRem;
    $renglones->save();
    return redirect('renglones');
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
        $remitos=Remito::pluck('nroRem','id');
        $articulos=Articulo::pluck('nombre','id');
        
        $renglones= Stock::find($id);
        
        return view('editRng', compact('renglones','remitos', 'articulos'));
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
        $renglones = Stock::find($id);
        $renglones->fill($request->all());
        $renglones->save();
        return redirect()->route('renglones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stock::destroy($id);
        return redirect('renglones');
    }
}
