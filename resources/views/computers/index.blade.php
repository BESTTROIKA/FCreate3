<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div class="container">
<br><br>
    <div class="card">
    <div class="card-header">
    <div class="row">
    <div class="col-md-8">
        <h2 class="card-title">Personas</h5>
        </div>
        <div class="col-md-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('computadoras.create')}}">+Nuevo</a>      
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
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($computers as $computadora)
        <tr>
            <td> 
                <a class="btn btn-info btn-small" href="{{route('computadoras.show', $computadora->id)}}">
                    <h4>{{$computadora->brand}} {{$computadora->model}}</h3></td>
                </a> 
            <td>
                <p><b>Pulgadas:</b>{{$computadora->inch}}</p>
                <p><b>Sistema Operativo:</b>{{$computadora->operativeSystem}} {{$computadora->version}}</p>

            </td>
            <td>
            <p><b>Almacenamiento:</b>{{$computadora->capacity}}</p>
            <p><b>RAM:</b>{{$computadora->Memory}} GB</p>
            <p><b>Procesador:</b>{{$computadora->processor}} {{$computadora->core}} núcleos</p>
            </td>
            <td>Ver | Editar | Eliminar</td>
        
        @empty
            <h1>La tabla no tiene datos</h1>
            </tr>
        @endforelse
    </tbody>
    
    </table>
    </div>
    </div>
</div>