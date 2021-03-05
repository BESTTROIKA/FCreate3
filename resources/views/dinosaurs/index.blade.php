@forelse ($dinosaurs as $dinosaur)
    <li>Datos:
        <h2>{{$dinosaur->name}} {{$dinosaur->feeding}}</h2>
        <p>{{$dinosaur->clasification}} Periodo: {{$dinosaur->period}} Altura: {{$dinosaur->size}} y peso: {{$dinosaur->weight}}</p>
    </li>

@empty
    <h2>No hay registros</h2>
@endforelse