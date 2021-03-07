<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-title">
                        <h4>{{$animal->name}} {{$animal->species}}</h3></td>                       
                         </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('animals.index')}}">< Regresar</a>      
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
                    <p><b>Familia:</b>{{$animal->family}}</p>
                    <p><b>Patas:</b>{{$animal->legs}} </p>
                    <p><b>Tamaño:</b>{{$animal->size}} </p>

                    </td>
                <td>
                    <p><b>Color:</b>{{$animal->color}}</p>
                    <p><b>Habitad:</b>{{$animal->inhabit}}</p>
                    <p><b>Nacionalidad:</b>{{$animal->nacionality}}</p>
                <p><b>Alimentación:</b>{{$animal->feeding}}</p>
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