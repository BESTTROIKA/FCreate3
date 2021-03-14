<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Actualizar Formulario de vehiculo<b> {{$vehicle->brand}} {{$vehicle->model}}</b></h1>

    <form action="{{route('vehicles.update', $vehicle->id)}}" method="post">

        @csrf

        @method('PUT')
        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca:</label>
                <input class="form-control" type="text" name="brand" value="{{$vehicle->brand}}" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo:</label>
                <input class="form-control" type="text" name="model" value="{{$vehicle->model}}" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color:</label>
                <input class="form-control" type="text" name="color" value="{{$vehicle->color}}" require>
            </div>
        </div>
        <br>
       <div class="row">
       <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de serie:</label>
                <input class="form-control" type="text" name="SerialNumber" value="{{$vehicle->serialNumber}}" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Matrícula:</label>
                <input class="form-control" type="text" name="carRegistration" value="{{$vehicle->carRegistration}}" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Puertas:</label>
                <input class="form-control" type="number" name="NumberOfDoors" value="{{$vehicle->numberOfDoors}}" require>
            </div>
       </div>
       <br>
       <div class="row">
       <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Asientos:</label>
                <input class="form-control" type="number" name="NumberOfSeats" value="{{$vehicle->numberOfSeats}}" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Kilometraje:</label>
                <input class="form-control" type="number" name="Mileage" value="{{$vehicle->mileage}}" require>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cilindraje:</label>
                <input class="form-control" type="number" name="cylinderCapacity" value="{{$vehicle->cylinderCapacity}}" require>
            </div>
       </div>
        <div>
            <label for="">Descripción:</label>
            <textarea class="form-control" type="text" name="description"  require>{{$vehicle->description}}</textarea>
        </div>
        <br>
        <div>
            <label for="">Comentario:</label>
            <input class="form-control" type="text" name="comment" value="{{$vehicle->comment}}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
   
</div>

