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
    public function index(Request $request)
    {
        $curso = $request->get('grado_asp');
        $estudiantes = App\Estudiante::orderBy('created_at', 'desc')->grad_asp($curso)->paginate(50);
        return view('listaestudiantes',compact('estudiantes'));
    }

    public function detalle($id){
        $estudiante = App\Estudiante::findOrFail($id);
        return view('estudiantes.detalle',compact('estudiante'));
    }
    public function editar($id){
        $usuario = App\User::findOrFail($id);
        $estudiante =App\Estudiante::where('ced_asp', $usuario->cedula)->first();
        return view('estudiantes.editar',compact('estudiante'));
    }
    public function update(Request $request,$id){
        $estudianteUpdate = App\Estudiante::findOrFail($id);
        $estudianteUpdate->bar_asp = $request->bar_asp;
        $estudianteUpdate->par_asp = $request->par_asp;
        $estudianteUpdate->cal_pri_asp = $request->cal_pri_asp;
        $estudianteUpdate->cal_sec_asp = $request->cal_sec_asp;
        $estudianteUpdate->save();
        return back()->with('mensaje','Estudiante Actualizado');
    }
    public function editarmatricula($id){
        $usuario = App\User::findOrFail($id);
        $estudiante =App\Estudiante::where('ced_asp', $usuario->cedula)->first();
        return view('estudiantes.editarmatricula',compact('estudiante'));
    }
    public function updatematricula(Request $request,$id){
        if($request->hasFile('pago_asp')){
            $pago = $request->file('pago_asp')->store('pagos');
        }
        $hoy = getdate();
        $fechaHoy= $hoy['mday']."/" .$hoy['mon'] ."/".$hoy['year'];
        
        $estudianteUpdate = App\Estudiante::findOrFail($id);
        $estudianteUpdate->ced_fac = $request->ced_fac;
        $estudianteUpdate->nom_fac = $request->nom_fac;
        $estudianteUpdate->ape_fac = $request->ape_fac;
        $estudianteUpdate->ema_fac = $request->ema_fac;
        $estudianteUpdate->dir_fac = $request->dir_fac;
        $estudianteUpdate->tel_fac = $request->tel_fac;
        $estudianteUpdate->pago_asp = $pago;
        $estudianteUpdate->fec_pago_asp = $fechaHoy;

        $estudianteUpdate->save();
        return back()->with('mensaje','Datos de Pago y factura Actualizado');
    }
    public function marcarInscrito($id){
        $estudianteUpdate = App\Estudiante::orderBy('created_at', 'desc')->findOrFail($id);
        $estudianteUpdate->estado_asp = true;
        $estudianteUpdate->save();
        $estudiantes = App\Estudiante::orderBy('created_at', 'desc')->paginate(50);
        return redirect('estudiantes')->with('status','Estudiante marcado como inscrito en el escolástico')->with('estudiantes',$estudiantes);
    }
    public function generarAprobados(Request $request){
        $curso = $request->get('grado_asp_pdf');
        $estudiantesAprobados = App\Estudiante::where('estado_asp',false)->grad_asp($curso)->paginate(50);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('estudiantes.pdflistaaprobados', ['estudiantes' => $estudiantesAprobados]);
        return $pdf->download("listaAprobados.pdf");
    }
    
    public function eliminar($id){
        $estudianteEliminar = App\Estudiante::findOrFail($id);
        $estudianteEliminar->delete();
        $estudiantes = App\Estudiante::orderBy('created_at', 'desc')->paginate(50);
        return redirect('estudiantes')->with('error','Estudiante Eliminado')->with('estudiantes',$estudiantes);
    }
}
