@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header"><h3>Exportar</h3></div>
                <div class="card-body">
                    <div class="form-group row">
                            <label for="export" class="col-md-4 col-form-label text-md-right">Exportar lista de Estudiantes</label>

                            <div class="col-md-6">
                                <a class="col-md-10 btn  btn-success" href="{{route('exportar.estudiantes')}}" >Descargar </a>
                            </div>
                    </div>
                    
                </div>

                <div class="card-header"><h3>Importar</h3></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <form method="POST" action="{{ route('importar.estudiantes') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">Importar archivo Xls de Excel</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="col-md-10 col-form-label" name="file" required>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Importar Estudiantes
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
