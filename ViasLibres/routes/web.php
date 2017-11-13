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
    return view('auth/login');
});

Route::get('/inicio',function(){
	if($this->middleware('auth')){
		return view('inicio');
	}

});

Auth::routes();
//Route::get('administracion/mapa', 'MapaController@maps');
Route::get('/home', 'HomeController@index')->name('home');
//LOGIN
Route::auth();

Route::resource('administracion/usuario','UsuarioController');
Route::resource('administracion/incidentes','IncidenteController');
Route::resource('administracion/mapa','MapaController');
Route::resource('administracion/archivados','IncidenteArchivadoController');

