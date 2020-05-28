<?php

namespace App\Imports;

use App\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;


class EstudiantesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        $nombrecompletoest = array_pad(explode(" ",$row[0]),4,null);
        if(($nombrecompletoest[0]!=NULL)&&($nombrecompletoest[1]!=NULL)&&($nombrecompletoest[2]!=NULL)&&($nombrecompletoest[3]!=NULL) ){
            $apellidosest = $nombrecompletoest[0]." ".$nombrecompletoest[1];
            $nombresest = $nombrecompletoest[2]." ".$nombrecompletoest[3];
        }else{
            $apellidosest = "XXX";
            $nombresest = "XXX";
        }
        $nombrecompletopad = array_pad(explode(" ",$row[39]),4,null);
        if(($nombrecompletopad[0]!=NULL)&&($nombrecompletopad[1]!=NULL)&&($nombrecompletopad[2]!=NULL)&&($nombrecompletopad[3]!=NULL) ){
            $apellidospad = $nombrecompletopad[0]." ".$nombrecompletopad[1];
            $nombrespad = $nombrecompletopad[2]." ".$nombrecompletopad[3];
        }else{
            $apellidospad = "XXX";
            $nombrespad = "XXX";
        }

        $nombrecompletomad = array_pad(explode(" ",$row[48]),4,null);
        if(($nombrecompletomad[0]!=NULL)&&($nombrecompletomad[1]!=NULL)&&($nombrecompletomad[2]!=NULL)&&($nombrecompletomad[3]!=NULL) ){
            $apellidosmad = $nombrecompletomad[0]." ".$nombrecompletomad[1];
            $nombresmad = $nombrecompletomad[2]." ".$nombrecompletomad[3];
        }else{
            $apellidosmad = "XXX";
            $nombresmad = "XXX";
        }
        $nombrecompletorep = array_pad(explode(" ",$row[57]),4,null);
        if(($nombrecompletorep[0]!=NULL)&&($nombrecompletorep[1]!=NULL)&&($nombrecompletorep[2]!=NULL)&&($nombrecompletorep[3]!=NULL) ){
            $apellidosrep = $nombrecompletorep[0]." ".$nombrecompletorep[1];
            $nombresrep = $nombrecompletorep[2]." ".$nombrecompletorep[3];
        }else{
            $apellidosrep = "XXX";
            $nombresrep = "XXX";
        }
        
        $nombrecompletofac = array_pad(explode(" ",$row[92]),4,null);
        if(($nombrecompletofac[0]!=NULL)&&($nombrecompletofac[1]!=NULL)&&($nombrecompletofac[2]!=NULL)&&($nombrecompletofac[3]!=NULL) ){
            $apellidosfac = $nombrecompletofac[0]." ".$nombrecompletofac[1];
            $nombresfac = $nombrecompletofac[2]." ".$nombrecompletofac[3];
        }else{
            $apellidosfac = "XXX";
            $nombresfac = "XXX";
        }

        
        return new Estudiante([
            'ced_asp' => $row[21],
            'nom_asp' => $nombresest,
            'ape_asp' => $apellidosest,
            'lug_nac_asp' => $row[18],
            'fec_nac_asp' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[19]),
            'her_asp' => 1,
            'lug_asp' => $row[91],
            'nac_asp' => $row[33],
            'etn_asp' => "No Especifica",
            'ema_asp' => $row[32],
            'par_asp' => $row[29],
            'bar_asp' => $row[25],
            'cal_pri_asp' => $row[26],
            'cal_sec_asp' => $row[27],
            
            'ced_mad' => $row[47],
            'nom_mad' => $nombresmad,
            'ape_mad' => $apellidosmad,
            'est_civ_mad' => $row[53],
            'pro_mad' => $row[50],
            'lug_tra_mad' => $row[52],
            'tel_mad' => $row[51],
            'cel_mad' => $row[51],
            'ema_mad' => "No especifica",

            'ced_pad' => $row[38],
            'nom_pad' => $nombrespad,
            'ape_pad' => $apellidospad,
            'est_civ_pad' => $row[44],
            'pro_pad' => $row[41],
            'lug_tra_pad' => $row[43],
            'tel_pad' => $row[42],
            'cel_pad' => $row[42],
            'ema_pad' => "No especifica",

            'ced_rep' => $row[56],
            'nom_rep' => $nombresrep,
            'ape_rep' => $apellidosrep,
            'est_civ_rep' => $row[64],
            'pro_rep' => $row[59],
            'lug_tra_rep' => "No especifica",
            'tel_rep' => $row[58],
            'cel_rep' => $row[58],
            'ema_rep' => $row[70],

            'grado_asp' => $row[12]." ".$row[14],
            'proc_asp' => $row[24],

            'pago_asp' => " ",
            'fec_pago_asp' => " ",

            'ced_fac' => $row[93],
            'nom_fac' => $nombresfac,
            'ape_fac' => $apellidosfac,
            'ema_fac' => " ",
            'dir_fac' => $row[94],
            'tel_fac' => $row[95],
            'estado_asp' => true,
        ]);
    }
}
