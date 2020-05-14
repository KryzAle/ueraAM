<head>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                    <table class="table">
                        <tbody>
                            <tr>
                            <th colspan="2" class="text-center">Datos de Aspirante</th>
                            </tr>
                            <tr>
                            <th>Cedula</th>
                                <td>{{$aspirante->ced_asp}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$aspirante->nom_asp}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$aspirante->ape_asp}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Nacimiento:</th>
                                <td>{{$aspirante->lug_nac_asp}}</td>
                            </tr>
                            <tr>
                            <th>Fecha de Nacimiento</th>
                                <td>{{$aspirante->fec_nac_asp}}</td>
                            </tr>
                            <tr>
                            <th>Numero de Hermanos</th>
                                <td>{{$aspirante->her_asp}}</td>
                            </tr>
                            <tr>
                            <th>Lugar que ocupa en la familia</th>
                                <td>{{$aspirante->lug_asp}}</td>
                            </tr>
                            <tr>
                            <th>Nacionalidad</th>
                                <td>{{$aspirante->nac_asp}}</td>
                            </tr>
                            <tr>
                            <th>Etnia</th>
                                <td>{{$aspirante->etn_asp}}</td>
                            </tr>
                            <tr>
                            <th>Correo electrónico</th>
                                <td>{{$aspirante->ema_asp}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Dirección Domiciliaria</th>
                            </tr>
                            <tr>
                            <th>Barrio de Residencia</th>
                                <td>{{$aspirante->bar_asp}}</td>
                            </tr>
                            <tr>
                            <th>Parroquia</th>
                                <td>{{$aspirante->par_asp}}</td>
                            </tr>
                            <tr>
                            <th>Calle Principal</th>
                                <td>{{$aspirante->cal_pri_asp}}</td>
                            </tr>
                            <tr>
                            <th>Calle Secundaria</th>
                                <td>{{$aspirante->cal_sec_asp}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Datos de la Madre</th>
                            </tr>
                            <tr>
                            <th>Cédula</th>
                                <td>{{$aspirante->ced_mad}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$aspirante->nom_mad}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$aspirante->ape_mad}}</td>
                            </tr>
                            <tr>
                            <th>Estado civil</th>
                                <td>{{$aspirante->est_civ_mad}}</td>
                            </tr>
                            <tr>
                            <th>Profesión</th>
                                <td>{{$aspirante->pro_mad}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Trabajo</th>
                                <td>{{$aspirante->lug_tra_mad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Convencional</th>
                                <td>{{$aspirante->tel_mad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Celular</th>
                                <td>{{$aspirante->cel_mad}}</td>
                            </tr>
                            <tr>
                            <th>Correo Electrónico</th>
                                <td>{{$aspirante->ema_mad}}</td>
                            </tr>
                            



                            <tr>
                            <th colspan="2" class="text-center">Datos del Padre</th>
                            </tr>
                            <tr>
                            <th>Cédula</th>
                                <td>{{$aspirante->ced_pad}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$aspirante->nom_pad}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$aspirante->ape_pad}}</td>
                            </tr>
                            <tr>
                            <th>Estado civil</th>
                                <td>{{$aspirante->est_civ_pad}}</td>
                            </tr>
                            <tr>
                            <th>Profesión</th>
                                <td>{{$aspirante->pro_pad}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Trabajo</th>
                                <td>{{$aspirante->lug_tra_pad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Convencional</th>
                                <td>{{$aspirante->tel_pad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Celular</th>
                                <td>{{$aspirante->cel_pad}}</td>
                            </tr>
                            <tr>
                            <th>Correo Electrónico</th>
                                <td>{{$aspirante->ema_pad}}</td>
                            </tr>




                            <tr>
                            <th colspan="2" class="text-center">Datos del Representante</th>
                            </tr>
                            <tr>
                            <th>Cédula</th>
                                <td>{{$aspirante->ced_rep}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$aspirante->nom_rep}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$aspirante->ape_rep}}</td>
                            </tr>
                            <tr>
                            <th>Estado civil</th>
                                <td>{{$aspirante->est_civ_rep}}</td>
                            </tr>
                            <tr>
                            <th>Profesión</th>
                                <td>{{$aspirante->pro_rep}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Trabajo</th>
                                <td>{{$aspirante->lug_tra_rep}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Convencional</th>
                                <td>{{$aspirante->tel_rep}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Celular</th>
                                <td>{{$aspirante->cel_rep}}</td>
                            </tr>
                            <tr>
                            <th>Correo Electrónico</th>
                                <td>{{$aspirante->ema_rep}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Datos Académicos</th>
                            </tr>
                            <tr>
                            <th>Curso al que postula el aspirante</th>
                                <td>{{$aspirante->grado_asp}}</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

