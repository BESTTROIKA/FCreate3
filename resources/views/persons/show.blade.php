<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-title">
                        <h4>{{$person->name}} {{$person->clasifica}}</h3></td>                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('persons.index')}}">< Regresar</a>      
                        </div>
                    </div>
                </div>
            </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Información</th>
                    <th>Descripción</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td> 
                    <p>Imagen</p>
                <td>
                    <p><b>Edad:</b>{{$person->age}}</p>
                    <p><b>Genero:</b>{{$person->gender}} </p>
                    </td>
                <td><p><b>Peso:</b>{{$person->weight}}</p>
                    <p><b>Altura:</b>{{$person->height}}</p>
                    <p><b>Nacionalidad:</b>{{$person->nacionality}}</p>
                    <p><b>Residencia:</b>{{$person->residence}}</p>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
        <div class="carfoster">
            <div class="col">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary" href="{{route('persons.edit', $person->id)}}">Editar</a>      
                                <a class="btn btn-danger" href="{{route('persons.destroy', $person->id)}}">Eliminar</a>      
                            </div>
                        </div>
            </div>
    </div>
</div>