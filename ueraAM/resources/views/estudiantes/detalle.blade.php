@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Detalle de estudiante</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table ">
                        <tbody>
                            <tr>
                            <th colspan="2" class="text-center">Datos de estudiante</th>
                            </tr>
                            <tr>
                            <th>Cedula</th>
                                <td>{{$estudiante->ced_asp}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$estudiante->nom_asp}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$estudiante->ape_asp}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Nacimiento</th>
                                <td>{{$estudiante->lug_nac_asp}}</td>
                            </tr>
                            <tr>
                            <th>Fecha de Nacimiento</th>
                                <td>{{$estudiante->fec_nac_asp}}</td>
                            </tr>
                            <tr>
                            <th>Numero de Hermanos</th>
                                <td>{{$estudiante->her_asp}}</td>
                            </tr>
                            <tr>
                            <th>Lugar que ocupa en la familia</th>
                                <td>{{$estudiante->lug_asp}}</td>
                            </tr>
                            <tr>
                            <th>Nacionalidad</th>
                                <td>{{$estudiante->nac_asp}}</td>
                            </tr>
                            <tr>
                            <th>Etnia</th>
                                <td>{{$estudiante->etn_asp}}</td>
                            </tr>
                            <tr>
                            <th>Correo electrónico</th>
                                <td>{{$estudiante->ema_asp}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Dirección Domiciliaria</th>
                            </tr>
                            <tr>
                            <th>Barrio de Residencia</th>
                                <td>{{$estudiante->bar_asp}}</td>
                            </tr>
                            <tr>
                            <th>Parroquia</th>
                                <td>{{$estudiante->par_asp}}</td>
                            </tr>
                            <tr>
                            <th>Calle Principal</th>
                                <td>{{$estudiante->cal_pri_asp}}</td>
                            </tr>
                            <tr>
                            <th>Calle Secundaria</th>
                                <td>{{$estudiante->cal_sec_asp}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Datos de la Madre</th>
                            </tr>
                            <tr>
                            <th>Cédula</th>
                                <td>{{$estudiante->ced_mad}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$estudiante->nom_mad}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$estudiante->ape_mad}}</td>
                            </tr>
                            <tr>
                            <th>Estado civil</th>
                                <td>{{$estudiante->est_civ_mad}}</td>
                            </tr>
                            <tr>
                            <th>Profesión</th>
                                <td>{{$estudiante->pro_mad}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Trabajo</th>
                                <td>{{$estudiante->lug_tra_mad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Convencional</th>
                                <td>{{$estudiante->tel_mad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Celular</th>
                                <td>{{$estudiante->cel_mad}}</td>
                            </tr>
                            <tr>
                            <th>Correo Electrónico</th>
                                <td>{{$estudiante->ema_mad}}</td>
                            </tr>
                            



                            <tr>
                            <th colspan="2" class="text-center">Datos del Padre</th>
                            </tr>
                            <tr>
                            <th>Cédula</th>
                                <td>{{$estudiante->ced_pad}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$estudiante->nom_pad}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$estudiante->ape_pad}}</td>
                            </tr>
                            <tr>
                            <th>Estado civil</th>
                                <td>{{$estudiante->est_civ_pad}}</td>
                            </tr>
                            <tr>
                            <th>Profesión</th>
                                <td>{{$estudiante->pro_pad}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Trabajo</th>
                                <td>{{$estudiante->lug_tra_pad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Convencional</th>
                                <td>{{$estudiante->tel_pad}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Celular</th>
                                <td>{{$estudiante->cel_pad}}</td>
                            </tr>
                            <tr>
                            <th>Correo Electrónico</th>
                                <td>{{$estudiante->ema_pad}}</td>
                            </tr>




                            <tr>
                            <th colspan="2" class="text-center">Datos del Representante</th>
                            </tr>
                            <tr>
                            <th>Cédula</th>
                                <td>{{$estudiante->ced_rep}}</td>
                            </tr>
                            <tr>
                            <th>Nombres</th>
                                <td>{{$estudiante->nom_rep}}</td>
                            </tr>
                            <tr>
                            <th>Apellidos</th>
                                <td>{{$estudiante->ape_rep}}</td>
                            </tr>
                            <tr>
                            <th>Estado civil</th>
                                <td>{{$estudiante->est_civ_rep}}</td>
                            </tr>
                            <tr>
                            <th>Profesión</th>
                                <td>{{$estudiante->pro_rep}}</td>
                            </tr>
                            <tr>
                            <th>Lugar de Trabajo</th>
                                <td>{{$estudiante->lug_tra_rep}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Convencional</th>
                                <td>{{$estudiante->tel_rep}}</td>
                            </tr>
                            <tr>
                            <th>Teléfono Celular</th>
                                <td>{{$estudiante->cel_rep}}</td>
                            </tr>
                            <tr>
                            <th>Correo Electrónico</th>
                                <td>{{$estudiante->ema_rep}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Datos Académicos</th>
                            </tr>
                            <tr>
                            <th>Curso al que se matriculó el estudiante</th>
                                <td>{{$estudiante->grado_asp}}</td>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Datos para la Factura</th>
                            </tr>
                            <th>Cedula</th>
                                <td>{{$estudiante->ced_fac}}</td>
                            </tr>
                            <th>Nombres</th>
                                <td>{{$estudiante->nom_fac}}</td>
                            </tr>
                            <th>Apellidos</th>
                                <td>{{$estudiante->ape_fac}}</td>
                            </tr>
                            <th>Correo Electrónico</th>
                                <td>{{$estudiante->ema_fac}}</td>
                            </tr>
                            <th>Dirección</th>
                                <td>{{$estudiante->dir_fac}}</td>
                            </tr>
                            <th>Teléfono</th>
                                <td>{{$estudiante->tel_fac}}</td>
                            </tr>
                            <th>Fecha de subida del pago</th>
                                <td>{{$estudiante->fec_pago_asp}}</td>
                            </tr>
                            <th>Descargar comprobante de pago</th>
                                <td><a href="../../../storage/app/{{$estudiante->pago_asp}}" target="_blank" download="{{$estudiante->ape_asp.' '.$estudiante->nom_asp.' Pago'}}" class="btn btn-info btn-sm"> Descargar</a></td>
                            </tr>

                            <tr>
                             <th class="text-center"><a href="{{ route('estudiantes.inscrito', $estudiante->id) }}" class="btn btn-success">Marcar como inscrito en el escolástico</a></th>
                                <td >
                                    <form action="{{ route('estudiantes.eliminar', $estudiante->id) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Eliminar Estudiante</button>
                                    </form>
                                </td>
                            </tr>





                        </tbody>
                    </table>

                </div>
                
                <br>
                <a href="{{route('home')}}" class="btn btn-warning">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
