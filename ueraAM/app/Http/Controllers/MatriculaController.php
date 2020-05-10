<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MatriculaController extends Controller
{
    public function verificarAprobacion(){
        return view('verificaraprobacion');
    }
    public function comprobarAprobacion(Request $request){
        //dd($request->cedula);
        $aspirante =App\Aspirante::where('ced_asp', $request->cedula)->get();
        if($aspirante->isEmpty()){
            dd("no lo encontre");
        }else{
            dd("lo encontre");
        }


    }

}
