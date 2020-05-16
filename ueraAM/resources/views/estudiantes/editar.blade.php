@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel</div>

                <div class="card-body">
                    @if (session('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('aspirantes.update',$aspirante->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="col-7">
                            <input type="text" class="form-control" placeholder="Nombre" value="{{$aspirante->nom_asp}}" name="nom_asp" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Telefono" value="{{$aspirante->ape_asp}}" name="ape_asp" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Observacion" value="{{$aspirante->ema_asp}}" name="ema_asp" required>
                            </div>
                        </div>
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
