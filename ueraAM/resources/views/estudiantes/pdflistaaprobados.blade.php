<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="card-header text-center"><h3>Lista de Aspirantes aprobados por curso</h3></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">

                    
                    <table class="table ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Grado/Curso</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($estudiantes as $item)
                            <tr>
                                <th scope="row">{{$item->ced_asp}}</th>
                                <td>{{$item->nom_asp}}</td>
                                <td>{{$item->ape_asp}}</td>
                                <td>{{$item->grado_asp}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

