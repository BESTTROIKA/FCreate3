<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Formulario para crear un nuevo registro</h1>

    <form action="{{route('vehicles.store')}}" method="post">

        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca:</label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo:</label>
                <input class="form-control" type="text" name="model" id="" placeholder="Modelo" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color:</label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" require>
            </div>
        </div>
        <br>
       <div class="row">
       <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de serie:</label>
                <input class="form-control" type="text" name="SerialNumber" id="" placeholder="Número de serie" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Matrícula:</label>
                <input class="form-control" type="text" name="carRegistration" id="" placeholder="Número de la placa" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Puertas:</label>
                <input class="form-control" type="number" name="NumberOfDoors" id="" placeholder="Número de Puertas" require>
            </div>
       </div>
       <br>
       <div class="row">
       <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Asientos:</label>
                <input class="form-control" type="number" name="NumberOfSeats" id="" placeholder="Número de Asientos" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Kilometraje:</label>
                <input class="form-control" type="number" name="Mileage" id="" placeholder="Kilometraje" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cilindraje:</label>
                <input class="form-control" type="number" name="cylinderCapacity" id="" placeholder="Cilindraje" require>
            </div>
       </div>
        <div>
            <label for="">Descripción:</label>
            <textarea class="form-control" type="text" name="description" id="" placeholder="Descripción" require></textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario:</label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
   
</div>

