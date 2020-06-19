<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReportarAprobado;
use App\Mail\ReportarRechazado;

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
    public function index(Request $request)
    {
        if($request!=NULL){
            $curso= $request->get('grado_asp');
            $aspirantes = App\Aspirante::orderBy('created_at', 'desc')->grad_asp($curso)->paginate(25);
        }else{
            dd("es nulo no se encuentra");
            $aspirantes = App\Aspirante::orderBy('created_at', 'desc')->paginate(25);
        }
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
    
    public function aprobar($id){
        $request = App\Aspirante::findOrFail($id);
        $nuevoEstudiante = new App\Estudiante;

        $nuevoEstudiante->ced_asp = $request->ced_asp;
        $nuevoEstudiante->ape_asp = $request->ape_asp;
        $nuevoEstudiante->nom_asp = $request->nom_asp;
        $nuevoEstudiante->lug_nac_asp = $request->lug_nac_asp;
        $nuevoEstudiante->fec_nac_asp = $request->fec_nac_asp;
        $nuevoEstudiante->her_asp = $request->her_asp;
        $nuevoEstudiante->lug_asp = $request->lug_asp;
        $nuevoEstudiante->nac_asp = $request->nac_asp;
        $nuevoEstudiante->etn_asp = $request->etn_asp;
        $nuevoEstudiante->ema_asp = $request->ema_asp;
        $nuevoEstudiante->par_asp = $request->par_asp;
        $nuevoEstudiante->bar_asp = $request->bar_asp;
        $nuevoEstudiante->cal_pri_asp = $request->cal_pri_asp;
        $nuevoEstudiante->cal_sec_asp = $request->cal_sec_asp;

        $nuevoEstudiante->ced_mad = $request->ced_mad;
        $nuevoEstudiante->ape_mad = $request->ape_mad;
        $nuevoEstudiante->nom_mad = $request->nom_mad;
        $nuevoEstudiante->est_civ_mad = $request->est_civ_mad;
        $nuevoEstudiante->pro_mad = $request->pro_mad;
        $nuevoEstudiante->lug_tra_mad = $request->lug_tra_mad;
        $nuevoEstudiante->tel_mad = $request->tel_mad;
        $nuevoEstudiante->cel_mad = $request->cel_mad;
        $nuevoEstudiante->ema_mad = $request->ema_mad;
       
        $nuevoEstudiante->ced_pad = $request->ced_pad;
        $nuevoEstudiante->ape_pad = $request->ape_pad;
        $nuevoEstudiante->nom_pad = $request->nom_pad;
        $nuevoEstudiante->est_civ_pad = $request->est_civ_pad;
        $nuevoEstudiante->pro_pad = $request->pro_pad;
        $nuevoEstudiante->lug_tra_pad = $request->lug_tra_pad;
        $nuevoEstudiante->tel_pad = $request->tel_pad;
        $nuevoEstudiante->cel_pad = $request->cel_pad;
        $nuevoEstudiante->ema_pad = $request->ema_pad;
        
        $nuevoEstudiante->ced_rep = $request->ced_rep;
        $nuevoEstudiante->ape_rep = $request->ape_rep;
        $nuevoEstudiante->nom_rep = $request->nom_rep;
        $nuevoEstudiante->est_civ_rep = $request->est_civ_rep;
        $nuevoEstudiante->pro_rep = $request->pro_rep;
        $nuevoEstudiante->lug_tra_rep = $request->lug_tra_rep;
        $nuevoEstudiante->tel_rep = $request->tel_rep;
        $nuevoEstudiante->cel_rep = $request->cel_rep;
        $nuevoEstudiante->ema_rep = $request->ema_rep;

        $nuevoEstudiante->grado_asp = $request->grado_asp;
        $nuevoEstudiante->proc_asp = $request->proc_asp;
        $nuevoEstudiante->ciu_ins_proc_asp = $request->ciu_ins_proc_asp;
        $nuevoEstudiante->pago_asp = "";
        $nuevoEstudiante->fec_pago_asp = "";
        $nuevoEstudiante->foto_asp = $request->foto_asp;
        $nuevoEstudiante->estado_asp = false;

        $nuevoEstudiante->fe_asp = "";
        $nuevoEstudiante->vac_asp = "";
        $nuevoEstudiante->exp_asp = "";
        $nuevoEstudiante->dce_asp = $request->comportamiento_asp;
        $nuevoEstudiante->cerp_asp = "";
        $nuevoEstudiante->cerc_asp = "";
        $nuevoEstudiante->cedula_asp = $request->copia_ced_asp;
        $nuevoEstudiante->cedula_mad = "";
        $nuevoEstudiante->cedula_pad = "";
        $nuevoEstudiante->cedula_rep = "";
        //$nuevoEstudiante->foto_asp = $request->foto_asp;
        
        $data = array(
            'nombres' => $nuevoEstudiante->nom_asp." ". $nuevoEstudiante->ape_asp,
            'email' => $nuevoEstudiante->ema_asp,
            'curso' => $nuevoEstudiante->grado_asp,
          );
          Mail::send('emails.aspiranteaprobado', $data, function ($message) {
            $message->from('uera.admision@gmail.com', 'UERA Admisión');
            $message->to('dece@ueradoroteas.edu.ec')->subject('¡Aspirante Aprobado!');
        });
        
        Mail::to($request->ema_asp)->send(new ReportarAprobado($request->nom_asp." ".$request->ape_asp,$request->ced_asp));
        Mail::to($request->ema_rep)->send(new ReportarAprobado($request->nom_asp." ".$request->ape_asp,$request->ced_asp));

        $nuevoEstudiante->save();
        $request->delete();
        
        $aspirantes = App\Aspirante::orderBy('created_at', 'desc')->paginate(50);
        return redirect('home')->with('status','Aspirante Aprobado, se han emitido los correos electrónicos y se ha inscrito al estudiante')->with('aspirantes',$aspirantes);
    }
    public function eliminar($id){
        $aspiranteEliminar = App\Aspirante::findOrFail($id);
        Mail::to($aspiranteEliminar->ema_asp)->cc('cristiankas2@gmail.com')->send(new ReportarRechazado($aspiranteEliminar->nom_asp." ".$aspiranteEliminar->ape_asp,$aspiranteEliminar->ced_asp));
        Mail::to($aspiranteEliminar->ema_rep)->send(new ReportarRechazado($aspiranteEliminar->nom_asp." ".$aspiranteEliminar->ape_asp,$aspiranteEliminar->ced_asp));
        $aspiranteEliminar->delete();
        $aspirantes = App\Aspirante::orderBy('created_at', 'desc')->paginate(50);
        return redirect('home')->with('error','Aspirante Rechazado y Solicitud Eliminada')->with('aspirantes',$aspirantes);
    }
}
