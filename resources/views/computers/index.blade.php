 @forelse ($computers as $computer)
    <li>Equipo:
        <h3>{{$computer->brand}} {{$computer->model}}</h3>
        <p>Almacenamineto: {{$computer->capacity}}     RAM:{{$computer->memory}}   Pulgadas:{{$computer->inch}}</p>
    </li>
 @empty
    <h1>Datos no almacenados</h1>
 @endforelse