<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class InscripcionController extends Controller
{
    public function formAspirante(){
        return view('formularioInscripcion');
    }
    public function formAcademico(){
        return view('formularioacademico');
    }
    public function formAspiranteInicial(){
        return view('formularioInscripcionInicial');
    }
    public function generarPDF($id){
        $aspirante = App\Aspirante::findOrFail($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('aspirantes.pdfaspirante', ['aspirante' => $aspirante]);
        return $pdf->download($aspirante->ape_asp." ".$aspirante->nom_asp.".pdf");
    }
    public function datosEstudianteInicial(Request $request){
        
        $nuevoAspirante = new App\Aspirante;

        if($request->hasFile('copia_ced_asp')){
            $cedula = $request->file('copia_ced_asp')->store('cedulas');
            $nuevoAspirante->copia_ced_asp = $cedula;
        }
        if($request->hasFile('foto_asp')){
            $foto = $request->file('foto_asp')->store('fotos');
            $nuevoAspirante->foto_asp = $foto;
        }

        $nuevoAspirante->ced_asp = $request->ced_asp;
        $nuevoAspirante->ape_asp = $request->ape_asp;
        $nuevoAspirante->nom_asp = $request->nom_asp;
        $nuevoAspirante->lug_nac_asp = $request->lug_nac_asp;
        $nuevoAspirante->fec_nac_asp = $request->fec_nac_asp;
        $nuevoAspirante->her_asp = $request->her_asp;
        $nuevoAspirante->lug_asp = $request->lug_asp;
        $nuevoAspirante->nac_asp = $request->nac_asp;
        $nuevoAspirante->etn_asp = $request->etn_asp;
        $nuevoAspirante->ema_asp = $request->ema_asp;
        $nuevoAspirante->par_asp = $request->par_asp;
        $nuevoAspirante->bar_asp = $request->bar_asp;
        $nuevoAspirante->cal_pri_asp = $request->cal_pri_asp;
        $nuevoAspirante->cal_sec_asp = $request->cal_sec_asp;

        $nuevoAspirante->ced_mad = $request->ced_mad;
        $nuevoAspirante->ape_mad = $request->ape_mad;
        $nuevoAspirante->nom_mad = $request->nom_mad;
        $nuevoAspirante->est_civ_mad = $request->est_civ_mad;
        $nuevoAspirante->pro_mad = $request->pro_mad;
        $nuevoAspirante->lug_tra_mad = $request->lug_tra_mad;
        $nuevoAspirante->tel_mad = $request->tel_mad;
        $nuevoAspirante->cel_mad = $request->cel_mad;
        $nuevoAspirante->ema_mad = $request->ema_mad;
       
        $nuevoAspirante->ced_pad = $request->ced_pad;
        $nuevoAspirante->ape_pad = $request->ape_pad;
        $nuevoAspirante->nom_pad = $request->nom_pad;
        $nuevoAspirante->est_civ_pad = $request->est_civ_pad;
        $nuevoAspirante->pro_pad = $request->pro_pad;
        $nuevoAspirante->lug_tra_pad = $request->lug_tra_pad;
        $nuevoAspirante->tel_pad = $request->tel_pad;
        $nuevoAspirante->cel_pad = $request->cel_pad;
        $nuevoAspirante->ema_pad = $request->ema_pad;
        
        $nuevoAspirante->ced_rep = $request->ced_rep;
        $nuevoAspirante->ape_rep = $request->ape_rep;
        $nuevoAspirante->nom_rep = $request->nom_rep;
        $nuevoAspirante->est_civ_rep = $request->est_civ_rep;
        $nuevoAspirante->pro_rep = $request->pro_rep;
        $nuevoAspirante->lug_tra_rep = $request->lug_tra_rep;
        $nuevoAspirante->tel_rep = $request->tel_rep;
        $nuevoAspirante->cel_rep = $request->cel_rep;
        $nuevoAspirante->ema_rep = $request->ema_rep;
        $nuevoAspirante->grado_asp = "2 IN";

        //dd($nuevoAspirante);
        $nuevoAspirante->save();
        return view('finregistro');
    }

    
    public function datosEstudiante(Request $request){
        $ced_asp = $request->ced_asp;
        $ape_asp = $request->ape_asp;
        $nom_asp = $request->nom_asp;
        $lug_nac_asp = $request->lug_nac_asp;
        $fec_nac_asp = $request->fec_nac_asp;
        $her_asp = $request->her_asp;
        $lug_asp = $request->lug_asp;
        $nac_asp = $request->nac_asp;
        $etn_asp = $request->etn_asp;
        $ema_asp = $request->ema_asp;
        $par_asp = $request->par_asp;
        $bar_asp = $request->bar_asp;
        $cal_pri_asp = $request->cal_pri_asp;
        $cal_sec_asp = $request->cal_sec_asp;

        $ced_mad = $request->ced_mad;
        $ape_mad = $request->ape_mad;
        $nom_mad = $request->nom_mad;
        $est_civ_mad = $request->est_civ_mad;
        $pro_mad = $request->pro_mad;
        $lug_tra_mad = $request->lug_tra_mad;
        $tel_mad = $request->tel_mad;
        $cel_mad = $request->cel_mad;
        $ema_mad = $request->ema_mad;

        $ced_pad = $request->ced_pad;
        $ape_pad = $request->ape_pad;
        $nom_pad = $request->nom_pad;
        $est_civ_pad = $request->est_civ_pad;
        $pro_pad = $request->pro_pad;
        $lug_tra_pad = $request->lug_tra_pad;
        $tel_pad = $request->tel_pad;
        $cel_pad = $request->cel_pad;
        $ema_pad = $request->ema_pad;

        $ced_rep = $request->ced_rep;
        $ape_rep = $request->ape_rep;
        $nom_rep = $request->nom_rep;
        $est_civ_rep = $request->est_civ_rep;
        $pro_rep = $request->pro_rep;
        $lug_tra_rep = $request->lug_tra_rep;
        $tel_rep = $request->tel_rep;
        $cel_rep = $request->cel_rep;
        $ema_rep = $request->ema_rep;


        return view('formularioacademico',compact(
            'ced_asp',
            'ape_asp',
            'nom_asp',
            'lug_nac_asp',
            'fec_nac_asp',
            'her_asp',
            'lug_asp',
            'nac_asp',
            'etn_asp',
            'ema_asp',
            'par_asp',
            'bar_asp',
            'cal_pri_asp',
            'cal_sec_asp',
            'ced_mad',
            'ape_mad',
            'nom_mad',
            'est_civ_mad',
            'pro_mad',
            'lug_tra_mad',
            'tel_mad',
            'cel_mad',
            'ema_mad',
            'ced_pad',
            'ape_pad',
            'nom_pad',
            'est_civ_pad',
            'pro_pad',
            'lug_tra_pad',
            'tel_pad',
            'cel_pad',
            'ema_pad',
            'ced_rep',
            'ape_rep',
            'nom_rep',
            'est_civ_rep',
            'pro_rep',
            'lug_tra_rep',
            'tel_rep',
            'cel_rep',
            'ema_rep'
        ));
    }
    public function datosAcademicos(Request $request){

        //$datosAcademicos = $request->all();
        //dd($datosAcademicos );
        $nuevoAspirante = new App\Aspirante;
        if($request->hasFile('computos_asp')){
            $computo = $request->file('computos_asp')->store('computos');
            $nuevoAspirante->computos_asp = $computo;
        }
        if($request->hasFile('comportamiento_asp')){
            $comportamiento = $request->file('comportamiento_asp')->store('comportamientos');
            $nuevoAspirante->comportamiento_asp = $comportamiento;
        }
        if($request->hasFile('copia_ced_asp')){
            $cedula = $request->file('copia_ced_asp')->store('cedulas');
            $nuevoAspirante->copia_ced_asp = $cedula;
        }
        if($request->hasFile('foto_asp')){
            $foto = $request->file('foto_asp')->store('fotos');
            $nuevoAspirante->foto_asp = $foto;
        }
        
        
        $nuevoAspirante->ced_asp = $request->ced_asp;
        $nuevoAspirante->ape_asp = $request->ape_asp;
        $nuevoAspirante->nom_asp = $request->nom_asp;
        $nuevoAspirante->lug_nac_asp = $request->lug_nac_asp;
        $nuevoAspirante->fec_nac_asp = $request->fec_nac_asp;
        $nuevoAspirante->her_asp = $request->her_asp;
        $nuevoAspirante->lug_asp = $request->lug_asp;
        $nuevoAspirante->nac_asp = $request->nac_asp;
        $nuevoAspirante->etn_asp = $request->etn_asp;
        $nuevoAspirante->ema_asp = $request->ema_asp;
        $nuevoAspirante->par_asp = $request->par_asp;
        $nuevoAspirante->bar_asp = $request->bar_asp;
        $nuevoAspirante->cal_pri_asp = $request->cal_pri_asp;
        $nuevoAspirante->cal_sec_asp = $request->cal_sec_asp;

        $nuevoAspirante->ced_mad = $request->ced_mad;
        $nuevoAspirante->ape_mad = $request->ape_mad;
        $nuevoAspirante->nom_mad = $request->nom_mad;
        $nuevoAspirante->est_civ_mad = $request->est_civ_mad;
        $nuevoAspirante->pro_mad = $request->pro_mad;
        $nuevoAspirante->lug_tra_mad = $request->lug_tra_mad;
        $nuevoAspirante->tel_mad = $request->tel_mad;
        $nuevoAspirante->cel_mad = $request->cel_mad;
        $nuevoAspirante->ema_mad = $request->ema_mad;
       
        $nuevoAspirante->ced_pad = $request->ced_pad;
        $nuevoAspirante->ape_pad = $request->ape_pad;
        $nuevoAspirante->nom_pad = $request->nom_pad;
        $nuevoAspirante->est_civ_pad = $request->est_civ_pad;
        $nuevoAspirante->pro_pad = $request->pro_pad;
        $nuevoAspirante->lug_tra_pad = $request->lug_tra_pad;
        $nuevoAspirante->tel_pad = $request->tel_pad;
        $nuevoAspirante->cel_pad = $request->cel_pad;
        $nuevoAspirante->ema_pad = $request->ema_pad;
        
        $nuevoAspirante->ced_rep = $request->ced_rep;
        $nuevoAspirante->ape_rep = $request->ape_rep;
        $nuevoAspirante->nom_rep = $request->nom_rep;
        $nuevoAspirante->est_civ_rep = $request->est_civ_rep;
        $nuevoAspirante->pro_rep = $request->pro_rep;
        $nuevoAspirante->lug_tra_rep = $request->lug_tra_rep;
        $nuevoAspirante->tel_rep = $request->tel_rep;
        $nuevoAspirante->cel_rep = $request->cel_rep;
        $nuevoAspirante->ema_rep = $request->ema_rep;

        $gradoAspirante = $request->grado_asp;
        switch ($gradoAspirante) {
            case "Primero EGB":
                $nuevoAspirante->grado_asp ="1 EB";
                break;
            case "Segundo EGB":
                $nuevoAspirante->grado_asp ="2 EB";
                break;
            case "Tercero EGB":
                $nuevoAspirante->grado_asp ="3 EB";
                break;
            case "Cuarto EGB":
                $nuevoAspirante->grado_asp ="4 EB";
                break;
            case "Quinto EGB":
                $nuevoAspirante->grado_asp ="5 EB";
                break;
            case "Sexto EGB":
                $nuevoAspirante->grado_asp ="6 EB";
                break;
            case "Séptimo EGB":
                $nuevoAspirante->grado_asp ="7 EB";
                break;
            case "Octavo EGB":
                $nuevoAspirante->grado_asp ="1 BS";
                break;
            case "Noveno EGB":
                $nuevoAspirante->grado_asp ="2 BS";
                break;
            case "Décimo EGB":
                $nuevoAspirante->grado_asp ="3 BS";
                break;
            case "1ro BGU":
                $nuevoAspirante->grado_asp ="4 BG";
                break;
            case "2do BGU":
                $nuevoAspirante->grado_asp ="5 BG";
                break;
            case "3ro BGU":
                $nuevoAspirante->grado_asp ="6 BG";
                break;
        }
        
        $nuevoAspirante->proc_asp = $request->proc_asp;
        $nuevoAspirante->ciu_ins_proc_asp = $request->ciu_ins_proc_asp;
        $nuevoAspirante->estado_asp = false;

        //dd($nuevoAspirante);
        $nuevoAspirante->save();
        return view('finregistro');


    }
    public function registroend(){
        return view('finregistro');
    }
}
