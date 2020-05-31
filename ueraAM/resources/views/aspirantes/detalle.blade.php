@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Detalle de aspirante</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table ">
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
                            <tr>
                            <th>Calificaciones</th>
                                @if (($aspirante->computos_asp!=NULL) && ($aspirante->computos_asp!=" "))
                                <td><a href="../../../storage/app/{{$aspirante->computos_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' Calificaciones'}}" class="btn btn-info btn-sm"> Descargar</a></td>
                                @else
                                <td> No dispone </td>
                                @endif
                            </tr>
                            <tr>
                            <th>Copia de Cédula</th>
                                @if (($aspirante->copia_ced_asp!=NULL) && ($aspirante->copia_ced_asp!=" "))
                                <td><a href="../../../storage/app/{{$aspirante->copia_ced_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' Cedula'}}" class="btn btn-info btn-sm"> Descargar</a></td>
                                @else
                                <td> No dispone </td>
                                @endif
                            </tr>
                            <tr>
                            <th>Foto de Aspirante</th>
                                @if (($aspirante->foto_asp!=NULL) && ($aspirante->foto_asp!=" "))
                                <td><a href="../../../storage/app/{{$aspirante->foto_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' Foto'}}" class="btn btn-info btn-sm"> Descargar</a></td>
                                @else
                                <td> No dispone </td>
                                @endif
                            </tr>
                            <tr>
                            <th>Certificado del D.E.C.E.</th>
                                @if (($aspirante->comportamiento_asp!=NULL) && ($aspirante->comportamiento_asp!=" "))
                                <td><a href="../../../storage/app/{{$aspirante->comportamiento_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' D.E.C.E.'}}" class="btn btn-info btn-sm"> Descargar</a></td>
                                @else
                                <td> No dispone </td>
                                @endif
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Descargar Información de Aspirante</th>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center"><a href="{{route('generarpdf',$aspirante->id)}}" target="_blank" class="btn btn-outline-danger">Descargar</a></th>
                            </tr>
                            @if(@Auth::user()->hasRole('administrador')||@Auth::user()->hasRole('psicologia'))

                            <tr>
                            <th colspan="2" class="text-center">Estado de la Solicitud</th>
                            </tr>
                            <tr>
                            <th class="text-center"><a href="{{ route('aspirantes.aprobar', $aspirante->id) }}" class="btn btn-success">Aprobar</a></th>
                                <td  class="text-center">
                                    <form action="{{ route('aspirantes.eliminar', $aspirante->id) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Rechazar</button>
                                    </form>
                                
                                </td>
                            </tr>
                             @endif

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
