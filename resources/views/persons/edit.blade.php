<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Datos de una Persona</h1>

    <form action="{{route('persons.update', $person->id)}}" method="post">

    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre:</label>
            <input class="form-control" type="text" name="name" value="{{$person->name}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Apellidos:</label>
            <input class="form-control" type="text" name="surname" value="{{$person->surname}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Edad</label>
            <input class="form-control" type="number" name="age" value="{{$person->age}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Género:</label>
            <input class="form-control" type="text" name="gender" value="{{$person->gender}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Peso:</label>
            <input class="form-control" type="number" name="weight" value="{{$person->weight}}">
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Altura:</label>
            <input class="form-control" type="number" name="height" value="{{$person->height}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nacionalidad:</label>
            <input class="form-control" type="text" name="nacionality" value="{{$person->nacionality}}">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Residencia:</label>
            <input class="form-control" type="text" name="residence" value="{{$person->residence}}">
        </div>

        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>