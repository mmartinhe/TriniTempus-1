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

/*Route::get('/register', 'RegisterController@mostrarCiudadesRegister');*/ //MOSTRARLOS EN VISTA CREAR SERVICIOS



//--------------------------------------------------
//RUTAS PARA LOS CAMBIOS DE VISTA 


Route::get( '/mi_cuenta', function () { return view( 'mi_cuenta' ); } );

Route::get( '/crear_servicio', function () { return view( 'crear_servicio' ); } );

Route::get( '/contacto', function () {return view( 'contacto' );} );

Route::get( '/ofertas', function () {return view( 'ofertas' );} );

Route::get( '/mensajes', function () {return view( 'mensajes' );} );

Route::get( '/multimedia', function () {return view( 'multimedia' );} );

Route::get( '/administrador', function () {return view( 'administrador' );} );

Route::get( '/buscador', function () {return view( 'buscador' );} );

Route::get( '/soporte', function () {
	return view( 'soporte' );} );


//--------------------------------------------------
//RUTA PARA MODIFICAR MIS DATOS
Route::post('/vistaModificarMisDatos', 'UsuariosController@vistaModificarMisDatos');
Route::post('/modificarMisDatos', 'UsuariosController@modificarMisDatos');
//--------------------------------------------------
//RUTA PARA DARSE DE BAJA
Route::delete('darseDeBaja/{id}', 'UsuariosController@darseDeBaja');
//----------------------------------------
//RUTAS PARA MULTIMEDIA

Route::get('/subir','MultimediaController@updateMultimedia');

//---------------------------------------
//RUTAS DE FOTO DE PERFIL
Route::get('/profile', 'UsuariosController@profile');
Route::post('/updateprofile', 'UsuariosController@updateProfile');
//----------------------------------------
//RUTAS PARA MOSTRAR TODOS LOS MENSAJES
Route::get('mi_cuenta', 'MensajesController@mostrarTodos');
Route::get('mensajes', 'MensajesController@mostrarTodosVistaMensajes');
Route::post('mensajes','MensajesController@crearMensaje');
//Route::get('mensajes', 'UsuariosController@');
Route::delete('eliminarMensaje/{id}','MensajesController@eliminarMensaje');

//--------------------------------------------------
//RUTAS DEL CALENDARIO
Route::get('Calendar/event/{mes}','CalendarioController@index_month');
Route::get('Calendar/event','CalendarioController@index');
//--------------------------------------------------
//RUTAS PARA LOS EVENTOS DEL CALENDARIO
Route::get('Evento/form','ServicioController@form');
Route::post('Evento/create','ServicioController@create');
Route::get('Evento/details/{id}','ServicioController@details');
Route::get('ofertas','ServicioController@index');
Route::get('Evento/index/{month}','ServicioController@index_month');
Route::post('Evento/calendario','ServicioController@calendario');
Route::get('crear_servicio', 'ServicioController@mostrarTodosEnCearEventos');
Route::post('borrarEventos/{id}','ServicioController@borrarEventos');
//--------------------------------------------------
//RUTAS PARA LOS SERVICIOS OFRECIDOS POR UN USUARIO
Route::post('Servicio/create','ServicioController@createServicio');
Route::delete('eliminar/{id}','ServicioController@eliminarServicio');
//--------------------------------------------------
//RUTAS PARA MOSTRAR LOS SERVICIOS OFRECIDOS POR UN USUARIO EN MI CUENTA
/*Route::get('mi_cuenta', 'ServicioController@mostrarTodos');*/
Route::get('/', 'ServicioController@mostrarTodosEnWelcome'); //MOSTRARLOS EN WELCOME
// va a petar cuando le pase los ultimos servicios 



//--------------------------------------------------
//RUTAS PARA BUSCADOR

//------------------------
//RUTAS PARA SOPORTE
//Route::post('mensajes','MensajesController@crearFormulario');

//Route::post('/soporte', 'SoporteController@contact');


//--------------------------------------------------
//RUTAS PARA ADMINISTRADORES
/*---------------------para el login  -----------------------------*/
/*Route::get('admins/logins', 'AdministratorsController@showLoginForm');*/
Route::get( 'admins/login', function () {return view( 'administrators.login' );} );
Route::post('admins/area', 'AdministratorsController@loginAdmin');

/*---------------------para la administracion  -----------------------------*/

                                /*AÑADIR*/
Route::post('Admin/anadirCiudad','AdministratorsController@anadirCiudad');
Route::post('Admin/anadirCategoria','AdministratorsController@anadirCategoria');
Route::post('Admin/anadirSubCategoria','AdministratorsController@anadirSubCategoria');

                                /*ELIMINAR*/
Route::post('Admin/eliminarCiudad','AdministratorsController@eliminarCiudad');
Route::post('Admin/eliminarCategoria','AdministratorsController@eliminarCategoria');
Route::post('Admin/eliminarSubCategoria','AdministratorsController@eliminarSubCategoria');


















