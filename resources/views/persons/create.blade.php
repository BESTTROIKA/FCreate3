<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Datos de una Persona</h1>

    <form action="{{route('persons.store')}}" method="post">

    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre:</label>
            <input class="form-control" type="text" name="name" placeholder="Nombre(s)">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Apellidos:</label>
            <input class="form-control" type="text" name="surname" placeholder="Apellidos">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Edad</label>
            <input class="form-control" type="number" name="age" placeholder="Edad">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Género:</label>
            <input class="form-control" type="text" name="gender" placeholder="(Femenino/Masculino)">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Peso:</label>
            <input class="form-control" type="number" name="weight" placeholder="Peso">
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Altura:</label>
            <input class="form-control" type="number" name="height" placeholder="Estatura">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nacionalidad:</label>
            <input class="form-control" type="text" name="nacionality" placeholder="Nacionalidad">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Residencia:</label>
            <input class="form-control" type="text" name="residence" placeholder="Lugar de Residencia">
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar Datos">
    </form>
</div>
