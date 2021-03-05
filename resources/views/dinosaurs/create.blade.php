<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <form action="{{route('dinosaurs.store')}}" method="post">
    @csrf

        <div>
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre del Dinosaurio">
        </div>
        <div>
            <label for="">Tamaño:</label>
            <input type="double" class="form-control" name="size" placeholder="Estatura">
        </div>
        <div>
            <label for="">Alimentación:</label>
            <input type="text" class="form-control" name="feeding" placeholder="Herbivoro/Carnivoro/omnivoro">
        </div>
        <div>
            <label for="">Periodo:</label>
            <input type="text" class="form-control" name="period" placeholder="Periodo">
        </div>
        <div>
            <label for="">Clasificación</label>
            <input type="text" class="form-control" name="clasification" placeholder="Clasificación">
        </div>
        <div>
            <label for="">Peso:</label>
            <input type="double" class="form-control" name="weight" placeholder="Peso del dinosaurio">
        </div>
        <div>
            <label for="">Reproducción:</label>
            <input type="text" class="form-control" name="reproduction" placeholder="Reproducción del dinosaurio">
        </div>
        <div>
            <label for="">Habitad:</label>
            <input type="text" class="form-control" name="inhabit" placeholder="Habitad Natural">
        </div>
        <div>
            <label for="">Región:</label>
            <input type="text" class="form-control" name="region" placeholder="Lugar de origen">
        </div>    
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
</div>