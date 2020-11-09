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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'examen'], function(){
    Route::post('cliente', 'controllerCliente@store');//registrar cliente
    Route::patch('act-cliente', 'controllerCliente@update');//actualizar datos cliente    
    Route::post('factura', 'controllerFactura@store');//registrar factura    
    Route::post('producto', 'controllerProducto@store');//registrar producto
    Route::patch('act-producto', 'controllerProducto@update');//actualizar producto    
    Route::post('detalles', 'controllerDetalle_factura@store');//registrar detalles    
});
