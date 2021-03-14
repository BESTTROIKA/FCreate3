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
                <a class="btn btn-primary" href="{{route('persons.create')}}">+Nuevo</a>      
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
    @forelse ($persons as $person)
        <tr>
            <td> 
                <a class="btn btn-info btn-small" href="{{route('persons.show', $person->id)}}">
                    <h4>{{$person->name}} <br>{{$person->surname}}</h3></td>
                </a> 
            <td>
                <p><b>Edad:</b>{{$person->age}}</p>
                <p><b>Genero:</b>{{$person->gender}} </p>
                
            </td>
            <td><p><b>Peso:</b>{{$person->weight}}</p>
            <p><b>Altura:</b>{{$person->height}}</p>
            <p><b>Nacionalidad:</b>{{$person->nacionality}}</p>
            <p><b>Residencia:</b>{{$person->residence}}</p>
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