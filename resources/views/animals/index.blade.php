@forelse ($animals as $animal)
    <li>Animal:
        <h2>{{$animal->name}} {{$animal->feeding}} {{$animal->country}}</h2>
        <p>{{$animal->species}} {{$animal->size}}</p>
    </li>
@empty
    <h2>No hay registro</h2>
@endforelse