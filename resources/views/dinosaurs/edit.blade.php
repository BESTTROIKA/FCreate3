<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>

    <h1>Formulario de dinosaurio: <b>{{$dinosaur->name}}</b></h1>
    <form action="{{route('dinosaurs.update', $dinosaur->id)}}" method="post">
    @csrf
    @method('PUT')

    <input type="hidden" name="id">

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{$dinosaur->name}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tamaño:</label>
            <input type="double" class="form-control" name="size" value="{{$dinosaur->size}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Alimentación:</label>
            <input type="text" class="form-control" name="feeding" value="{{$dinosaur->feeding}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Periodo:</label>
            <input type="text" class="form-control" name="period" value="{{$dinosaur->period}}" require>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Clasificación</label>
            <input type="text" class="form-control" name="clasification" value="{{$dinosaur->clasification}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Peso:</label>
            <input type="double" class="form-control" name="weight" value="{{$dinosaur->weight}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Reproducción:</label>
            <input type="text" class="form-control" name="reproduction" value="{{$dinosaur->reproduction}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Habitad:</label>
            <input type="text" class="form-control" name="inhabit" value="{{$dinosaur->inhabit}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Región:</label>
            <input type="text" class="form-control" name="region" value="{{$dinosaur->region}}" require>
        </div>    
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>