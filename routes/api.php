<?php

use Illuminate\Http\Request;
use ViasLibres\Incidente;
use ViasLibres\User;
use ViasLibres\calificacion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Login
Route::get('/token', 'api\LoginApiController@getToken');
Route::get('/logout', 'api\LoginApiController@logout');
Route::post('/login', 'api\LoginApiController@login');

//API INCIDENTE
Route::get('/incidentes', function(){
	return Incidente::all();
});

//Crear
Route::post('/incidentes','api\IncidenteController@create_incidente');
//Borrar
Route::get('/incidentes/{id}','api\IncidenteController@delete');
//Editar
Route::post('/incidentes/{id}/edit','api\IncidenteController@edit');
//Crear calificacion
Route::post('/calificaciones/{id}/{seleccion}/create_calification','api\IncidenteController@create_calification');
//UploadImage
Route::post('/incidentes/imageupload','api\IncidenteController@uploadImage');

//API USUARIO
Route::get('/usuarios', function(){
	return User::all();
});

//Crear
Route::post('/usuarios','api\UsuarioController@create');
//Borrar
Route::delete('/usuarios/{id}','api\UsuarioController@delete');
//Ver
Route::get('/usuarios/{id}','api\UsuarioController@getUser');
//Editar
Route::post('/usuarios/{id}/edit','api\UsuarioController@edit');

//API CALIFICACION
Route::get('/calificaciones', function(){
	return calificacion::all();
});




//Prueba para llenar calificaciones si existe id , agregar +1 a cualquier calificacion solo una vez y guardar calificacion.

/*Route::post('crearCalificacion', function(Request $request,$id){
	$calificacion=calificacion::find(where('idincident','=',$id));
	if($calificacion->calificationA=='1'){
		$calificacion->calificationA=$request->get('calificationA');
		$calificacion->calificationB=$request->get('calificationB');
		$calificacion->calificationC=$request->get('calificationC');
		$calificacion->calificationA=$calificacion->calificationA+1;
	}
	if($calificacion->calificationB=='1'){
		$calificacion->calificationA=$request->get('calificationA');
		$calificacion->calificationB=$request->get('calificationB');
		$calificacion->calificationC=$request->get('calificationC');
		$calificacion->calificationB=$calificacion->calificationB+1;
	}
	if($calificacion->calificationC=='1'){
		$calification->calificationA=$request->get('calificationA');
		$calification->calificationB=$request->get('calificationB');
		$calification->calificationC=$request->get('calificationC');
		$calificacion->calificationC=$calificacion->calificationC+1;
	}
	if (calificacion::update($request->where('idincident','=',$id))) {

		return response()->json(['status'=>'ok'],200);
		}else{
		return response()->json(['status'=>'error'],404);
		}
	return response()->json(['status' => 'ok']);
	});*/

Route::get('/calificacionesid/{id}', function($id){
	calificacion::all()->where('idincident','=',$id);
	
});