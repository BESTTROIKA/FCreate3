<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">


<div class="container">
<br><br>
    <div class="card">
    <div class="card-header">
    <div class="row">
    <div class="col-md-8">
        <h2 class="card-title">Dinosaurus</h5>
        </div>
        <div class="col-md-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('dinosaurs.create')}}">+Nuevo</a>      
        </div>
        </div>
    </div>
    </div>
    <div class="card-body">

    <table class="table table-striped">
    <thead>
        <tr>
            <th>Dinosaurio</th>
            <th>Información</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($dinosaurs as $dinosaur)
        <tr>
            <td> 
                <a class="btn btn-info btn-small" href="{{route('dinosaurs.show', $dinosaur->id)}}">
                    <h4>{{$dinosaur->name}} {{$dinosaur->clasification}}</h3></td>
                </a> 
            <td>
                <p><b>Peso:</b>{{$dinosaur->wieght}}</p>
                <p><b>Tamaño:</b>{{$dinosaur->size}} Metros</p>
                <p><b>Habitad:</b>{{$dinosaur->inhabit}}</p>

            </td>
            <td><p><b>Periodo:</b>{{$dinosaur->period}}</p>
            <p><b>Alimentación:</b>{{$dinosaur->feeding}}</p>
            <p><b>Reproducción:</b>{{$dinosaur->reproduction}}</p>
            <p><b>Región:</b>{{$dinosaur->region}}</p>
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