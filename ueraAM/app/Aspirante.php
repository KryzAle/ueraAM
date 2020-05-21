<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    protected $fillable = [
        'ced_asp',
        'nom_asp',
        'ape_asp',
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
        'nom_mad',
        'ape_mad',
        'est_civ_mad',
        'pro_mad',
        'lug_tra_mad',
        'tel_mad',
        'cel_mad',
        'ema_mad',

        'ced_pad',
        'nom_pad',
        'ape_pad',
        'est_civ_pad',
        'pro_pad',
        'lug_tra_pad',
        'tel_pad',
        'cel_pad',
        'ema_pad',

        'ced_rep',
        'nom_rep',
        'ape_rep',
        'est_civ_rep',
        'pro_rep',
        'lug_tra_rep',
        'tel_rep',
        'cel_rep',
        'ema_rep',

        'grado_asp', 
        'computos_asp', 
        'proc_asp', 
        'ciu_ins_proc_asp', 
        'comportamiento_asp', 
        'copia_ced_asp', 
        'foto_asp', 

        'estado_asp', 
        'name',
        'email',
        'password',
    ];
    public function scopeGrad_asp($query,$grado_asp){
        if($grado_asp)
            return $query->where('grado_asp','LIKE',"%$grado_asp%");
    }

}
