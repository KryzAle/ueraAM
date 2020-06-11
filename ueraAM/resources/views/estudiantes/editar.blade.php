@extends('layouts.app')

@section('content')
@php
    $usuarioActivo = auth()->id();
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @if(@Auth::user()->hasRole('estudiante'))
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{ route('home') }}">Inicio</a>
                    <a class="flex-sm-fill text-sm-center nav-link active" href="#">Actualizacion de datos</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{route('estudiantes.editar.contrato', $usuarioActivo)}}">Contrato de Servicios Educativos</a>
                    <a class="flex-sm-fill text-sm-center nav-link disabled"  href="{{route('estudiantes.editar.matricula', $usuarioActivo)}}">Legalizar Matrícula</a>
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
                        <table class="table">
                        <tbody>
                            <tr>
                                <th colspan="2" class="text-center">Datos Informativos</th>
                            </tr>
                            <tr>
                                <th>Correo electónico del estudiante</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo Electrónico" value="{{$estudiante->ema_asp}}" name="ema_asp" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Telefono convencional del representante</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefono convencional" value="{{$estudiante->tel_rep}}" name="tel_rep" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Telefono celular del representante </th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefono celular" value="{{$estudiante->cel_rep}}" name="cel_rep" required>
                                </div>
                                </td>
                            </tr>
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
                                <th>Calle Secundaria</th>
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
