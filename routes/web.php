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


//Rutas de registro de usuarios

Route::name('users_path')->get('usuarios', 'userController@index');

Route::name('users_create_path')->get('usuarios/crear', 'userController@create');

Route::name('users_store_path')->post('usuarios/crear', 'userController@store');

Route::name('users_edit_path')->get('usuarios/{user}/editar', 'userController@edit');

Route::name('users_update_path')->put('usuarios/{user}', 'userController@Update');

Route::name('users_delete_path')->delete('usuarios/{user}', 'userController@Destroy');

//Rutas de menu

Route::name('menus_path')->get('menus', 'MenuController@index');

Route::name('menus_create_path')->get('menus/crear', 'MenuController@create');

Route::name('menus_store_path')->post('menus/crear', 'MenuController@store');

Route::name('menus_edit_path')->get('menus/{menu}/editar', 'MenuController@edit');

Route::name('menus_update_path')->put('menus/{menu}', 'MenuController@Update');

Route::name('menus_delete_path')->delete('menus/{menu}', 'MenuController@Destroy');
