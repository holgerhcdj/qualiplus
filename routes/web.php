<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes(['verify' => true]);
	Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'HomeController@index')->middleware('verified');
	Route::resource('perfiles', 'PerfilesController');
	Route::resource('instituciones', 'InstitucionesController');
	Route::resource('contactos', 'ContactosController');
	Route::post('/guarda_contactos', 'ContactosController@store')->name('guarda_contactos');
	Route::resource('comunicaciones', 'ComunicacionesController');
	Route::resource('usuarios', 'UsuariosController');
	Route::resource('usuariosPerfiles', 'UsuariosPerfilesController');
	Route::get('/reportes', 'ReportesController@index')->name('reportes');
	Route::get('institutes', 'ReportesController@institutes');
	Route::get('contacts', 'ReportesController@contacts');
	Route::get('comunications', 'ReportesController@comunications');
});