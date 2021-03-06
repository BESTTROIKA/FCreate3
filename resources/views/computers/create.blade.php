<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Formulario de una computadora</h1>
        <form action="{{route('computadoras.store')}}" class="form-control" method="post">

        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo:</label>
                <input class="form-control" type="text" name="model" placeholder="Modelo del Equipo">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Pulgadas:</label>
                <input class="form-control" type="number" name="inch" placeholder="Pulgadas del equipo">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca:</label>
                <input class="form-control" type="text" name="brand" placeholder="Marca del equipo">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sistema Opeativo:</label>
                <input class="form-control" type="text" name="operativeSystem" placeholder="Sistema Operativo del equipo">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Versión:</label>
                <input class="form-control" type="number" name="version" placeholder="Versión del sistema">
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad:</label>
                <input class="form-control" type="text" name="capacity" placeholder="Capacidad del Disco Duro">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">RAM:</label>
                <input class="form-control" type="number" name="memory" placeholder="Memoria RAM">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Procesador:</label>
                <input class="form-control" type="text" name="processor" placeholder="Tipo de procesador">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Núcleos:</label>
                <input class="form-control" type="number" name="core" placeholder="número de núcleos">
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
</div>