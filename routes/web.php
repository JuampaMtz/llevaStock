<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/proveedores', 'ProveedorController@prov')->name('proveedores');
Route::get('/articulos', 'ArticuloController@art')->name('articulos');
Route::get('/remitos', 'RemitoController@index')->name('remitos');
Route::get('/renglones', 'RenglonController@index')->name('renglones');
Route::get('/historialStock', 'HistorialStockController@index')->name('historialStock');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/pdfProveedores', 'ProveedorController@pdfGenerate')->name('pdfProveedores');



Route::post('/articulos/{id}', 'ArticuloController@darDeBaja')->name('Articulo.darDeBaja');
Route::post('/proveedores/{id}', 'ProveedorController@darDeBaja')->name('Proveedor.darDeBaja');
Route::post('/remitos/{id}', 'RemitoController@darDeBaja')->name('Remito.darDeBaja');

Route::post('insertarRenglon', 'RenglonController@insertarRenglon');
Route::post('insertarRemito', 'RemitoController@insertarRemito');
Route::post('insertarProveedor', 'ProveedorController@insertarProveedor');
Route::post('insertarArticulo', 'ArticuloController@insertarArticulo');


Route::resource('Proveedor', 'ProveedorController');
Route::resource('Remito', 'RemitoController');
Route::resource('Renglon', 'RenglonController');
Route::resource('Articulo', 'ArticuloController');


