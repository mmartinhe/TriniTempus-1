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
//RUTA PARA DARSE DE BAJA
Route::post('/darseDeBaja', 'UsuariosController@darseDeBaja');
//----------------------------------------
//RUTAS DE FOTO DE PERFIL
Route::get('/profile', 'UsuariosController@profile');
Route::post('/updateprofile', 'UsuariosController@updateProfile');
//----------------------------------------
//RUTAS PARA MOSTRAR TODOS LOS MENSAJES
Route::get('mi_cuenta', 'MensajesController@mostrarTodos');
Route::get('mensajes', 'MensajesController@mostrarTodosVistaMensajes');
//Route::get('mensajes', 'UsuariosController@');

//--------------------------------------------------
//RUTAS DEL CALENDARIO
Route::get('Calendar/event/{mes}','CalendarioController@index_month');
Route::get('Calendar/event','CalendarioController@index');
//--------------------------------------------------
//RUTAS PARA LOS SERVICIOS
Route::get('Evento/form','ServicioController@form');
Route::post('Evento/create','ServicioController@create');
Route::get('Evento/details/{id}','ServicioController@details');
Route::get('ofertas','ServicioController@index');
Route::get('Evento/index/{month}','ServicioController@index_month');
Route::post('Evento/calendario','ServicioController@calendario');















