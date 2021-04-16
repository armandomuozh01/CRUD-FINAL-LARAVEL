<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::resource('/pedidos', 'App\Http\Controllers\PedidosController');
Route::resource('/clientes', 'App\Http\Controllers\ClientesController');
Route::resource('/empleados', 'App\Http\Controllers\EmpleadosController');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'App\Http\Controllers\ProductosController@index');
// Route::get('/createProduct', 'App\Http\Controllers\ProductosController@create');
