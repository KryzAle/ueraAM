<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class EstudianteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $estudiantes = App\Estudiante::paginate(50);
        return view('listaestudiantes',compact('estudiantes'));
    }

    public function detalle($id){
        $estudiante = App\Estudiante::findOrFail($id);
        return view('estudiantes.detalle',compact('estudiante'));
    }
    public function editar($id){
        $estudiante = App\Estudiante::findOrFail($id);
        return view('estudiantes.editar',compact('estudiante'));
    }
    public function update(Request $request,$id){
        $estudianteUpdate = App\Estudiante::findOrFail($id);
        $estudianteUpdate->nom_asp = $request->nom_asp;
        $estudianteUpdate->ape_asp = $request->ape_asp;
        $estudianteUpdate->nom_asp = $request->nom_asp;
        $estudianteUpdate->save();
        return back()->with('mensaje','estudiante Actualizado');
    }
    
    public function eliminar($id){
        $estudianteEliminar = App\Estudiante::findOrFail($id);
        $estudianteEliminar->delete();
        $estudiantes = App\Estudiante::paginate(50);
        return redirect('estudiantes')->with('error','Estudiante Eliminado')->with('estudiantes',$estudiantes);
    }
}
