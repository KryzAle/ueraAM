@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                

            <div class="card-header">Bienvenido, a continuación puede visualizar los aspirantes que han enviado una solicitud</div>
                <div class="card-body">
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
                   
                    <br>
                    <table class="table-responsive">
                    
                        <table class="table text-center table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">E-mail</th>
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
                                    <td style="word-wrap: break-word">
                                        <a class="btn btn-outline-primary" href="{{route('aspirantes.detalle',$item)}}">Detalle</a>
                                        <!-- 
                                        <a href="{{route('aspirantes.editar', $item)}}" class="btn btn-outline-success">Editar</a>
                                        -->
                                        <form action="{{ route('aspirantes.eliminar', $item) }}" class="d-inline" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                        </form> 
                                    </td> 
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </table>
                    {{$aspirantes->links()}}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
