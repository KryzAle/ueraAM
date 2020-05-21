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
                <a class="flex-sm-fill text-sm-center nav-link active" href="#">Inicio</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="{{route('estudiantes.editar', $usuarioActivo)}}">Actualizacion de datos</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Convenio de Comportamiento</a>
                <a class="flex-sm-fill text-sm-center nav-link " href="{{route('estudiantes.editar.matricula', $usuarioActivo)}}">Legalizar Matrícula</a>
            </nav>
            <br>
            <div class="embed-responsive embed-responsive-16by9">
                <div class="card-header text-center"><iframe width="700" height="450" src="https://www.youtube.com/embed/21anS3PJGtQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
            </div>
            @endif
            @if(@Auth::user()->hasRole('administrador')||@Auth::user()->hasRole('psicologia')||@Auth::user()->hasRole('secretaria'))

            
            <div class="card-header text-center"><h3>Lista de Solicitudes de aspirantes</h3></div>
            
                <div class="card-body  text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                   <table>
                        <tr>
                            <td>
                            <form method="GET" action="{{route('home')}}">
                                <div class="input-group mb-3">
                                        <input type="text" class="form-control"  value="{{ request('grado_asp')}}" placeholder="Ingrese curso/grado" aria-label="Buscar por curso/grado" aria-describedby="basic-addon2" name="grado_asp">
                                <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                                </div>
                                </div>
                            </form>
                            </td>
                        </tr>
                   </table>
                    <table class="table table-responsive">
                    
                        <table class="table text-center table-responsive ">
                        
                            
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Curso de Postulación</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($aspirantes as $item)
                                <tr>
                                    <th scope="row">{{$item->ced_asp}}</th>
                                    <td>{{$item->nom_asp}}</td>
                                    <td>{{$item->ape_asp}}</td>
                                    <td>{{$item->ema_asp}}</td>
                                    <td>{{$item->grado_asp}}</td>
                                    <td style="word-wrap: break-word">
                                        <a class="btn btn-outline-primary" href="{{route('aspirantes.detalle',$item)}}">Detalle</a>
                                        <!-- 
                                        <a href="{{route('aspirantes.editar', $item)}}" class="btn btn-outline-success">Editar</a>
                                        -->
                                        
                                    </td> 
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </table>
                    {{$aspirantes->links()}}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>




@endsection
