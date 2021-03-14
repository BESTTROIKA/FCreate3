<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Animal</h1>

    <form action="{{route('animals.update', $animal->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="name" value="{{$animal->name}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Especie:</label>
            <input type="text" class="form-control" name="species" value="{{$animal->species}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Familia:</label>
            <input type="text" class="form-control" name="family" value="{{$animal->family}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Habitad:</label>
            <input type="text" class="form-control" name="inhabit" value="{{$animal->inhabit}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Color:</label>
            <input type="text" class="form-control" name="color" value="{{$animal->color}}" require>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Patas:</label>
            <input type="number" class="form-control" name="legs" value="{{$animal->legs}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Alimentación:</label>
            <input type="text" class="form-control" name="feeding" value="{{$animal->feeding}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tamaño:</label>
            <input type="text" class="form-control" name="size" value="{{$animal->size}}" require>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">País:</label>
            <input type="text" class="form-control" name="country" value="{{$animal->country}}" require>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>