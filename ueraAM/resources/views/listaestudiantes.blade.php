@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                

            <div class="card-header text-center"><h3>Lista de Estudiantes</h3></div>
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
                   
                    <table class="table table-responsive">
                    
                        <table class="table text-center table-responsive ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Grado/Curso</th>
                                    <th scope="col">Inscrito en el Escolástico</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($estudiantes as $item)
                                <tr>
                                    <th scope="row">{{$item->ced_asp}}</th>
                                    <td>{{$item->nom_asp}}</td>
                                    <td>{{$item->ape_asp}}</td>
                                    <td>{{$item->grado_asp}}</td>
                                    <td>
                                        @if($item->estado_asp==0)
                                            <div class="alert alert-danger" role="alert">
                                                No
                                            </div>
                                        @else
                                            <div class="alert alert-success" role="alert">
                                                Si
                                            </div>
                                        @endif
                                    </td>
                                    <td style="word-wrap: break-word">
                                        <a class="btn btn-outline-primary" href="{{route('estudiantes.detalle',$item)}}">Detalle</a>
                                        <!-- 
                                        <a href="{{route('estudiantes.editar', $item)}}" class="btn btn-outline-success">Editar</a>
                                        -->
                                        
                                    </td> 
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </table>
                    {{$estudiantes->links()}}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
