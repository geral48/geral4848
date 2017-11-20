<?php

namespace ViasLibres\Http\Controllers\api;


use Illuminate\Http\Request;
use ViasLibres\Http\Controllers\Controller;
use ViasLibres\Incidente;
use ViasLibres\calificacion;
use DB;

class IncidenteController extends Controller
{

	/*public function create(Request $request){
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
    }*/

    public function create_incidente(Request $request){
         Incidente::create([
        'description' => $request->get('description'),
        'incident_status' => $request->get('incident_status'),
        'user_id' => $request->get('user_id'),
        'long_location' => $request->get('long_location'),
        'lat_location' => $request->get('lat_location'),
        'imagen' => $request->get('imagen'),
        'calificationA' => 0,
        'calificationB' => 0,
        'calificationC' => 0,
    ]);

    return response()->json(['status' => 'ok']);
    }

    public function create_calification(Request $request,$id,$seleccion){
        $incidente=Incidente::find($id);
        if ($incidente) {
            if($seleccion =='A'){
                //$incidente=Incidente::find($id)->select('calificationA')->where('id','=',$id);
                //$var=intval($incidente->pluck('calificationA'))+1;
                //$var = $incidente->select('calificationA')->where('id','=',$id);
                //$var= (int)DB::table('incident')->select('calificationA')->where('id','=',$id)->get();
                //$var2 = $var+1 ;
                //$res=$var+1;
                $incidente->update(['calificationA'=> +$incidente->calificationA+1,]);
            }
            if($seleccion =='B'){
                $incidente->update(['calificationB'=> +$incidente->calificationB+1,]);
            }
            if($seleccion =='C'){
                $incidente->update(['calificationC'=> +$incidente->calificationC+1,]);
            }
            return response()->json(['status'=>'ok'],200);
        }
    }

    public function uploadImage(Request $request) {
        $nameFile = 'incidente_'.rand(100, 999).'.jpeg';
        $path = $request->image->storeAs('', $nameFile);
        return response()->json(['status'=>'ok', 'data' => $path],200);
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