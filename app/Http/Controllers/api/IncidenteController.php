<?php

namespace ViasLibres\Http\Controllers\api;


use Illuminate\Http\Request;
use ViasLibres\Http\Controllers\Controller;
use ViasLibres\Incidente;
use ViasLibres\calificacion;

class IncidenteController extends Controller
{

	public function create(Request $request){
    	if (Incidente::create($request->all()) && calificacion::create([
        'idincident' => Incidente::select('id'),
        'calificationA' => 0,
        'calificationB' => 0,
        'calificationC' => 0,
        
    ]))
     {
		return response()->json(['status'=>'ok'],200);
		}else{
		return response()->json(['status'=>'error'],404);
		}
    }

    public function delete($id){
    	$incidente=Incidente::find($id);
    	if ($incidente) {
    		$incidente->delete();
    		return response()->json(['status'=>'ok'],200);
    	}else{
    		return response()->json(['status'=>'error , incidente no existe'],404);
    	}
    }

     public function edit(Request $request,$id){
    	$incidente=Incidente::find($id);
    	if ($incidente) {
    		$incidente->update($request->all());
    		return response()->json(['status'=>'ok'],200);
    	}else{
    		return response()->json(['status'=>'error , incidente no existe'],404);
    	}
    }
}