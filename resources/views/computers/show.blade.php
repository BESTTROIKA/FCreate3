<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-title">
                        <h4>{{$computadora->brand}} {{$computadora->modelo}}</h3></td>                       
                         </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('computadoras.index')}}">< Regresar</a>      
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
                    <p><b>Pulgadas:</b>{{$computadora->inch}}</p>
                    <p><b>Sistema Operativo:</b>{{$computadora->operativeSystem}} {{$computadora->version}}</p>


                    </td>
                <td>
                        <p><b>Almacenamiento:</b>{{$computadora->capacity}}</p>
                        <p><b>RAM:</b>{{$computadora->Memory}} GB</p>
                        <p><b>Procesador:</b>{{$computadora->processor}} {{$computadora->core}} núcleos</p>
                        
                </td>
            </tr>
        </tbody>
        </table>
    </div>
        <div class="carfoster">
            <div class="col">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary" href="{{route('computadoras.edit', $computadora->id)}}">Editar</a>      
                                <a class="btn btn-danger" href="{{route('computadoras.destroy', $computadora->id)}}">Eliminar</a>      
                            </div>
                        </div>
            </div>
    </div>
</div>