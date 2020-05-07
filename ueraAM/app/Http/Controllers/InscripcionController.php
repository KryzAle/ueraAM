<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function formAspirante(){
        return view('formularioInscripcion');
    }
    public function formAcademico(){
        return view('formularioacademico');
    }
    public function formPsicologico(){
        return view('formulariopsicologico');
    }
    public function registroend(){
        return view('finregistro');
    }
}
