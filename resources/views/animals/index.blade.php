<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div class="container">
<br><br>
    <div class="card">
    <div class="card-header">
    <div class="row">
    <div class="col-md-8">
        <h2 class="card-title">Animales</h5>
        </div>
        <div class="col-md-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('animals.create')}}">+Nuevo</a>      
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
    @forelse ($animals as $animal)
        <tr>
            <td> 
                <a class="btn btn-info btn-small" href="{{route('animals.show', $animal->id)}}">
                    <h4>{{$animal->name}} {{$animal->species}}</h3></td>
                </a> 
            <td>
                <p><b>Familia:</b>{{$animal->family}}</p>
                <p><b>Patas:</b>{{$animal->legs}} </p>
                <p><b>Tamaño:</b>{{$animal->size}} </p>

            </td>
            <td><p><b>Color:</b>{{$animal->color}}</p>
            <p><b>Habitad:</b>{{$animal->inhabit}}</p>
            <p><b>Nacionalidad:</b>{{$animal->country}}</p>
            <p><b>Alimentación:</b>{{$animal->feeding}}</p>
            </td>
            
        
        @empty
            <h1>La tabla no tiene datos</h1>
            </tr>
        @endforelse
    </tbody>
    
    </table>
    </div>
    </div>
</div>