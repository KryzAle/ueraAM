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
                    <h5><b>Datos del Aspirante</b></h5>
                    <h6><b>Cedula: </b>{{$aspirante->ced_asp}}</h6>
                    <h6><b>Nombres: </b>{{$aspirante->nom_asp}}</h6>
                    <h6><b>Apellidos:</b> {{$aspirante->ape_asp}}</h6>
                    <h6><b>Lugar de Nacimiento:</b> {{$aspirante->lug_nac_asp}}</h6>
                    <h6><b>Fecha de Nacimiento:</b> {{$aspirante->fec_nac_asp}}</h6>
                    <h6><b>Numero de hermanos:</b> {{$aspirante->her_asp}}</h6>
                    <h6><b>Lugar que ocupa en la familia:</b> {{$aspirante->lug_asp}}</h6>
                    <h6><b>Nacionalidad:</b> {{$aspirante->nac_asp}}</h6>
                    <h6><b>Etnia:</b> {{$aspirante->etn_asp}}</h6>
                    <h6><b>Correo electrónico:</b> {{$aspirante->ema_asp}}</h6>
                    <h6><b>Barrio de Residencia:</b> {{$aspirante->bar_asp}}</h6>
                    <h6><b>Parroquia:</b> {{$aspirante->par_asp}}</h6>
                    <h6><b>Calle Principal:</b> {{$aspirante->cal_pri_asp}}</h6>
                    <h6><b>Calle Secundaria:</b> {{$aspirante->cal_sec_asp}}</h6>
                    <br>
                    <h5><b>Datos de la madre</b></h5>
                    <h6><b>Cédula:</b> {{$aspirante->ced_mad}}</h6>
                    <h6><b>Nombres:</b> {{$aspirante->nom_mad}}</h6>
                    <h6><b>Apellidos:</b> {{$aspirante->ape_mad}}</h6>
                    <h6><b>Estado civil:</b> {{$aspirante->est_civ_mad}}</h6>
                    <h6><b>Profesión:</b> {{$aspirante->pro_mad}}</h6>
                    <h6><b>Lugar de Trabajo:</b> {{$aspirante->lug_tra_mad}}</h6>
                    <h6><b>Teléfono Convencional:</b> {{$aspirante->tel_mad}}</h6>
                    <h6><b>Teléfono Celular:</b> {{$aspirante->cel_mad}}</h6>
                    <h6><b>Correo Electrónico:</b> {{$aspirante->ema_mad}}</h6>

                    <br>
                    <h5><b>Datos del Padre</b></h5>
                    <h6><b>Cédula:</b> {{$aspirante->ced_pad}}</h6>
                    <h6><b>Nombres:</b> {{$aspirante->nom_pad}}</h6>
                    <h6><b>Apellidos:</b> {{$aspirante->ape_pad}}</h6>
                    <h6><b>Estado civil:</b> {{$aspirante->est_civ_pad}}</h6>
                    <h6><b>Profesión:</b> {{$aspirante->pro_pad}}</h6>
                    <h6><b>Lugar de Trabajo:</b> {{$aspirante->lug_tra_pad}}</h6>
                    <h6><b>Teléfono Convencional:</b> {{$aspirante->tel_pad}}</h6>
                    <h6><b>Teléfono Celular:</b> {{$aspirante->cel_pad}}</h6>
                    <h6><b>Correo Electrónico:</b> {{$aspirante->ema_pad}}</h6>

                    <br>
                    <h5><b>Datos del Representante legal</b></h5>
                    <h6><b>Cédula:</b> {{$aspirante->ced_rep}}</h6>
                    <h6><b>Nombres:</b> {{$aspirante->nom_rep}}</h6>
                    <h6><b>Apellidos:</b> {{$aspirante->ape_rep}}</h6>
                    <h6><b>Estado civil:</b> {{$aspirante->est_civ_rep}}</h6>
                    <h6><b>Profesión:</b> {{$aspirante->pro_rep}}</h6>
                    <h6><b>Lugar de Trabajo:</b> {{$aspirante->lug_tra_rep}}</h6>
                    <h6><b>Teléfono Convencional:</b> {{$aspirante->tel_rep}}</h6>
                    <h6><b>Teléfono Celular:</b> {{$aspirante->cel_rep}}</h6>
                    <h6><b>Correo Electrónico:</b> {{$aspirante->ema_rep}}</h6>

                    <br>
                    <h5><b>Datos del Académicos</b></h5>
                    <h6><b>Curso al que postula el aspirante:</b> {{$aspirante->grado_asp}}</h6>
                    <h6><b>Calificaciones: </b><br><a href="../../../storage/app/{{$aspirante->computos_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' Calificaciones'}}.pdf" class="btn btn-info btn-sm"> Descargar</a></h6>
                    <h6><b>Copia de Cédula: </b><br><a href="../../../storage/app/{{$aspirante->copia_ced_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' Cedula'}}.pdf" class="btn btn-info btn-sm"> Descargar</a></h6>
                    <h6><b>Foto de Aspirante: </b><br><a href="../../../storage/app/{{$aspirante->foto_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->nom_asp.' Foto'}}.jpg" class="btn btn-info btn-sm"> Descargar</a></h6>
                    <h6><b>Certificado del D.E.C.E.: </b><br><a href="../../../storage/app/{{$aspirante->comportamiento_asp}}" target="_blank" download="{{$aspirante->ape_asp.' '.$aspirante->comportamiento_asp.' D.E.C.E.'}}.pdf" class="btn btn-info btn-sm"> Descargar</a></h6>

                </div>
                <a href="{{route('home')}}" class="btn btn-success">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
