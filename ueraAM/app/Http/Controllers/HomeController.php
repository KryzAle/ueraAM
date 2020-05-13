<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class HomeController extends Controller
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
        $aspirantes = App\Aspirante::paginate(50);
        return view('home',compact('aspirantes'));
    }

    public function detalle($id){
        $aspirante = App\Aspirante::findOrFail($id);
        return view('aspirantes.detalle',compact('aspirante'));
    }
    public function editar($id){
        $aspirante = App\Aspirante::findOrFail($id);
        return view('aspirantes.editar',compact('aspirante'));
    }
    public function update(Request $request,$id){
        $aspiranteUpdate = App\Aspirante::findOrFail($id);
        $aspiranteUpdate->nombre = $request->nombre;
        $aspiranteUpdate->telefono = $request->telefono;
        $aspiranteUpdate->observacion = $request->observacion;
        $aspiranteUpdate->save();
        return back()->with('mensaje','aspirante Actualizado');
    }
    public function eliminar($id){
        $aspiranteEliminar = App\Aspirante::findOrFail($id);
        $aspiranteEliminar->delete();
        return back()->with('status','aspirante Eliminado');
    }
}
