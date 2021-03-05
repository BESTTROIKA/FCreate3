<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{route('vehicles.store')}}" method="post">

        @csrf
        <div>
            <label for="">Marca:</label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
        </div>
        <div>
            <label for="">Modelo:</label>
            <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        </div>
        <div>
            <label for="">Color:</label>
            <input class="form-control" type="text" name="color" id="" placeholder="Color">
        </div>
        <div>
            <label for="">Número de serie:</label>
            <input class="form-control" type="text" name="SerialNumber" id="" placeholder="Número de serie">
        </div>
        <div>
            <label for="">Matrícula:</label>
            <input class="form-control" type="text" name="carRegistration" id="" placeholder="Número de la placa">
        </div>
        <div>
            <label for="">Número de Puertas:</label>
            <input class="form-control" type="number" name="NumberOfDoors" id="" placeholder="Número de Puertas">
        </div>
        <div>
            <label for="">Número de Asientos:</label>
            <input class="form-control" type="number" name="NumberOfSeats" id="" placeholder="Número de Asientos">
        </div>
        <div>
            <label for="">Kilometraje:</label>
            <input class="form-control" type="number" name="Mileage" id="" placeholder="Kilometraje">
        </div>
        <div>
            <label for="">Cilindraje:</label>
            <input class="form-control" type="number" name="cylinderCapacity" id="" placeholder="Cilindraje">
        </div>
        <div>
            <label for="">Descripción:</label>
            <textarea class="form-control" type="text" name="description" id="" placeholder="Descripción"></textarea>
        </div>
        <div>
            <label for="">Comentario:</label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        </div>
        
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
        
</div>

