<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

    <div class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-title">
                            <h2>Dinosaurio: {{$dinosaur->name}} {{$dinosaur->clasification}}</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('dinosaurs.index')}}">< Regresar</a>      
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
                </tr>
            </thead>
        <tbody>
            <tr>
                <td> 
                    <p>Imagen</p>
                <td>
                    <p><b>Peso:</b>{{$dinosaur->weight}}</p>
                    <p><b>Tamaño:</b>{{$dinosaur->size}} Metros</p>
                    <p><b>Habitad:</b>{{$dinosaur->inhabit}}</p>
                    </td>
                <td>
                    <p><b>Periodo:</b>{{$dinosaur->period}}</p>
                    <p><b>Alimentación:</b>{{$dinosaur->feeding}}</p>
                    <p><b>Reproducción:</b>{{$dinosaur->reproduction}}</p>
                    <p><b>Región:</b>{{$dinosaur->region}}</p>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
        <div class="carfoster">
            <div class="col">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('dinosaurs.edit', $dinosaur->id)}}">Editar</a>

                            <form action="{{route('dinosaurs.destroy', $dinosaur->id)}}" method="post">
                                @csrf 
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                            </form>                                  
                        </div>
            </div>
    </div>
</div>