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

Route::get('/', function () {
    return view('welcome');
});

// Routes Admin
Route::get('ExpressWorshop/Admin', 'AdministradorController@index');
Route::get('ExpressWorshop/Admin/Profile/{id}', 'AdministradorController@profile');
Route::get('ExpressWorshop/Admin/Persons', 'AdministradorController@miembros');
Route::get('ExpressWorshop/Admin/Auto', 'AdministradorController@vehiculos');
Route::get('ExpressWorshop/Admin/Inv', 'InventarioController@index');
Route::put('ExpressWorshop/Admin/editPersons/{id}', 'AdministradorController@update');
Route::put('ExpressWorshop/Admin/editProfile/{id}', 'AdministradorController@updateProfile');

//Route Extras
Route::post('ExpressWorshop/Users/Create', 'AdministradorController@store');

// Routes Cliente
Route::post('ExpressWorshop/Client/Reserva', 'ClienteController@store');
Route::get('ExpressWorshop/Client/History/{id}', 'ClienteController@index');

// Routes Recepcion
Route::post('ExpressWorshop/Recep/Reserva', 'RecepcionController@store');

//Routes Inventario
Route::post('ExpressWorshop/Inv/Registro', 'InventarioController@store');
Route::get('ExpressWorshop/Inv', 'InventarioController@index');
Route::put('ExpressWorshop/Inv/editInv/{id}', 'InventarioController@update');

//vistas por asignar
Route::view('/navInicio', 'Navs/adminNav');