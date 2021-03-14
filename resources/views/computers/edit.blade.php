<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Formulario de una computadora</h1>
        <form action="{{route('computadoras.update', $computadora->id)}}" class="form-control" method="post">

        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo:</label>
                <input class="form-control" type="text" name="model" value="{{$computadora->model}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Pulgadas:</label>
                <input class="form-control" type="number" name="inch" value="{{$computadora->inch}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca:</label>
                <input class="form-control" type="text" name="brand" value="{{$computadora->brand}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sistema Opeativo:</label>
                <input class="form-control" type="text" name="operativeSystem" value="{{$computadora->operativeSystem}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Versión:</label>
                <input class="form-control" type="number" name="version" value="{{$computadora->version}}">
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad:</label>
                <input class="form-control" type="text" name="capacity" value="{{$computadora->capacity}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">RAM:</label>
                <input class="form-control" type="number" name="memory" value="{{$computadora->memory}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Procesador:</label>
                <input class="form-control" type="text" name="processor" value="{{$computadora->processor}}">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Núcleos:</label>
                <input class="form-control" type="number" name="core" value="{{$computadora->core}}">
            </div>
            <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
        </form>
</div>