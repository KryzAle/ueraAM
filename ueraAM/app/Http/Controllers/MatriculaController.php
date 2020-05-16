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
        $estudiante =App\Estudiante::where('ced_asp', $request->cedula)->get();
        if($estudiante->isEmpty()){
            return back()->with('status','El estudiante no ha sido encontrado');
        }else{
            $estudiante =App\Estudiante::where('ced_asp', $request->cedula)->first();
            $cedula=$estudiante->ced_asp;
            $nombre=$estudiante->nom_asp." ".$estudiante->ape_asp;
            $email=$estudiante->ema_asp;
            return view('auth.register',compact('cedula','nombre','email'));
        }


    }

}
