@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @if(@Auth::user()->hasRole('estudiante'))
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('home') }}">Inicio</a>
                    <a class="flex-sm-fill text-sm-center nav-link active" href="#">Actualizacion de datos</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">Convenio de Comportamiento</a>
                    <a class="flex-sm-fill text-sm-center nav-link disabled" href="#">Legalizar Inscripción</a>
                </nav>
                
                @endif

                <div class="card-body">
                    <div class="card-header text-center"><h3>Actualizar datos de Estudiante</h3></div>

                    @if (session('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('estudiantes.update',$estudiante->id) }}">
                        @method('PUT')
                        @csrf
                        <table class="table ">
                        <tbody>
                            <tr>
                            <th colspan="2" class="text-center">Dirección Domiciliaria</th>
                            </tr>
                            <tr>
                                <th>Barrio</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="barrio" value="{{$estudiante->bar_asp}}" name="bar_asp" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Parroquia</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="parroquia" value="{{$estudiante->par_asp}}" name="par_asp" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Calle Principal</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Principal" value="{{$estudiante->cal_pri_asp}}" name="cal_pri_asp" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Calle Principal</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="secundaria" value="{{$estudiante->cal_sec_asp}}" name="cal_sec_asp" required>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <br>
                    <button class="btn btn-warning" type="submit">Actualizar</button>
                    <a href="{{route('home')}}" class="btn btn-success">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
