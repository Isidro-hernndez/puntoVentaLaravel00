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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('sucursales_path')->get('/sucursales', 'Sucursal@index');

Route::name('sucursales_create_path')->get('/sucursales/crear', 'Sucursal@create');

Route::name('sucursales_store_path')->post('sucursales/crear', 'Sucursal@store');

Route::name('sucursales_edit_path')->get('sucursales/{sucursal}/editar', 'Sucursal@edit');

Route::name('sucursales_update_path')->put('sucursales/{sucursal}', 'Sucursal@Update');

Route::name('sucursales_delete_path')->delete('sucursales/{sucursal}', 'Sucursal@delete');
