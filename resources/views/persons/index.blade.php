@forelse ($persons as $person)
    <li>Datos:
        <h1>{{$person->name}} {{$person->surname}}</h1>
        <p>Edad: {{$person->age}} Sexo: {{$person->gender}}</p>
    </li>
@empty
    <h1>No hay datos encrontados</h1>
@endforelse