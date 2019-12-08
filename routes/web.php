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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

//--------------------------------------------------
//RUTAS PARA LOS CAMBIOS DE VISTA 

Route::get( '/mi_cuenta', function () { return view( 'mi_cuenta' ); } );

Route::get( '/contacto', function () {return view( 'contacto' );} );

Route::get( '/ofertas', function () {return view( 'ofertas' );} );

Route::get( '/mensajes', function () {return view( 'mensajes' );} );

Route::get( '/multimedia', function () {return view( 'multimedia' );} );

Route::get( '/administrador', function () {return view( 'administrador' );} );

Route::get( '/buscador', function () {return view( 'buscador' );} );

//--------------------------------------------------
//RUTA PARA MODIFICAR MIS DATOS
Route::post('/vistaModificarMisDatos', 'UsuariosController@vistaModificarMisDatos');
Route::post('/modificarMisDatos', 'UsuariosController@modificarMisDatos');
//--------------------------------------------------
//RUTA PARA MODIFICAR MIS DATOS
Route::post('/darseDeBaja', 'UsuariosController@darseDeBaja');

















