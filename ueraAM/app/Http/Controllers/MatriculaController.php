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
            return back()->with('status','El aspirante no ha sido encontrado');
        }else{
            $aspirante =App\Aspirante::where('ced_asp', $request->cedula)->first();
            $cedula=$aspirante->ced_asp;
            $nombre=$aspirante->nom_asp." ".$aspirante->ape_asp;
            $email=$aspirante->ema_asp;
            return view('auth.register',compact('cedula','nombre','email'));
        }


    }

}
