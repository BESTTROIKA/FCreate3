<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <form action="{{route('dinosaurs.store')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre del Dinosaurio">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tamaño:</label>
            <input type="double" class="form-control" name="size" placeholder="Estatura">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Alimentación:</label>
            <input type="text" class="form-control" name="feeding" placeholder="Herbivoro/Carnivoro/omnivoro">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Periodo:</label>
            <input type="text" class="form-control" name="period" placeholder="Periodo">
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Clasificación</label>
            <input type="text" class="form-control" name="clasification" placeholder="Clasificación">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Peso:</label>
            <input type="double" class="form-control" name="weight" placeholder="Peso del dinosaurio">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Reproducción:</label>
            <input type="text" class="form-control" name="reproduction" placeholder="Reproducción del dinosaurio">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Habitad:</label>
            <input type="text" class="form-control" name="inhabit" placeholder="Habitad Natural">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Región:</label>
            <input type="text" class="form-control" name="region" placeholder="Lugar de origen">
        </div>    
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>