<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Formulario de una computadora</h1>
        <form action="{{route('computadoras.store')}}" class="form-control" method="post">

        @csrf
            <div>
                <label for="">Modelo:</label>
                <input class="form-control" type="text" name="model" placeholder="Modelo del Equipo">
            </div>
            <div>
                <label for="">Pulgadas:</label>
                <input class="form-control" type="number" name="inch" placeholder="Pulgadas del equipo">
            </div>
            <div>
                <label for="">Marca:</label>
                <input class="form-control" type="text" name="brand" placeholder="Marca del equipo">
            </div>
            <div>
                <label for="">Sistema Opeativo:</label>
                <input class="form-control" type="text" name="operativeSystem" placeholder="Sistema Operativo del equipo">
            </div>
            <div>
                <label for="">Versión:</label>
                <input class="form-control" type="number" name="version" placeholder="Versión del sistema">
            </div>
            <div>
                <label for="">Capacidad:</label>
                <input class="form-control" type="text" name="capacity" placeholder="Capacidad del Disco Duro">
            </div>
            <div>  
                <label for="">RAM:</label>
                <input class="form-control" type="number" name="memory" placeholder="Memoria RAM">
            </div>
            <div>
                <label for="">Procesador:</label>
                <input class="form-control" type="text" name="processor" placeholder="Tipo de procesador">
            </div>
            <div>
                <label for="">Núcleos:</label>
                <input class="form-control" type="number" name="core" placeholder="número de núcleos">
            </div>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>
</div>