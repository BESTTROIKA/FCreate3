<link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css')}}">

<div>
    <h1>Animal</h1>

    <form action="{{route('animals.store')}}" method="post">

        @csrf
        <div>
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre del animal">
        </div>
        <div>
            <label for="">Especie:</label>
            <input type="text" class="form-control" name="species" placeholder="Especie">
        </div>
        <div>
            <label for="">Familia:</label>
            <input type="text" class="form-control" name="family" placeholder="Familia animal">
        </div>
        <div>
            <label for="">Habitad:</label>
            <input type="text" class="form-control" name="inhabit" placeholder="Habital Natural">
        </div>
        <div>
            <label for="">Color:</label>
            <input type="text" class="form-control" name="color" placeholder="Color común">
        </div>
        <div>
            <label for="">Patas:</label>
            <input type="number" class="form-control" name="legs" placeholder="número de patas">
        </div>
        <div>
            <label for="">Alimentación:</label>
            <input type="text" class="form-control" name="feeding" placeholder="Herbívoro/Carnivoro/Omnivoro">
        </div>
        <div>
            <label for="">Tamaño:</label>
            <input type="text" class="form-control" name="size" placeholder="Tamaña promedio">
        </div>
        <div>
            <label for="">País:</label>
            <input type="text" class="form-control" name="country" placeholder="País origen">
        </div>

        <input type="submit" class="btn btn-primary" value="Mostrar">
    </form>
</div>