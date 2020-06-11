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
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{route('estudiantes.editar', $usuarioActivo)}}">Actualizacion de datos</a>
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{route('estudiantes.editar.contrato', $usuarioActivo)}}">Contrato de Servicios Educativos</a>
                    <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('estudiantes.editar.matricula', $usuarioActivo)}}">Legalizar Matrícula</a>
                </nav>
                
                @endif

                <div class="card-body">
                    <div class="card-header text-center"><h3>Legalizar Matrícula</h3></div>

                    @if (session('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('estudiantes.update.matricula',$estudiante->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <table class="table ">
                        <tbody>
                            <tr>
                                <th colspan="2" class="text-center">Adjuntar Comprobante del Pago</th>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">
                                    <input type="file" class="form-control-file" accept=".pdf" id="pago_asp" name="pago_asp" required>
                                </th>
                            </tr>
                            <tr>
                            <th colspan="2" class="text-center">Datos para la factura</th>
                            </tr>
                            <tr>
                                <th>Cédula</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cédula para la factura" value="{{$estudiante->ced_fac}}" name="ced_fac" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" value="{{$estudiante->nom_fac}}" name="nom_fac" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Apellido</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido" value="{{$estudiante->ape_fac}}" name="ape_fac" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Correo Electrónico</th>
                                <td>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico" value="{{$estudiante->ema_fac}}" name="ema_fac" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dirección" value="{{$estudiante->dir_fac}}" name="dir_fac" required>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Teléfono</th>
                                <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Teléfono" value="{{$estudiante->tel_fac}}" name="tel_fac" required>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <br>
                    <button class="btn btn-warning" type="submit">Enviar</button>
                    <a href="{{route('home')}}" class="btn btn-success">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
