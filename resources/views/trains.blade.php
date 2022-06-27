@extends('layouts.main')

@section('content')
   <main class="container">
    <h1 class="text-center py-5">Lista Treni</h1>

    @foreach ($trains as $train)
    <div class="train mb-4 d-flex flex-column align-items-center py-3">
        <h3>Treno N° : {{ $train->codice_treno }}</h3>
        <h3>Partenza da : <i>{{ $train->stazione_di_partenza }}</i> alle ore : {{ $train->orario_di_partenza }}</h3>
        <h3>Destinazione : <i>{{ $train->stazione_di_arrivo }}</i> alle ore : {{ $train->orario_di_arrivo }}</h3>
        <h3>N° carrozze : {{ $train->numero_carrozze }}</h3>
        <h3>{{ $train->in_orario ? 'In orario' : 'In ritardo' }}</h3>
        <h3>{{ $train->cancellato ? 'Treno cancellato' : '' }}</h3>
    </div>
    @endforeach

   </main>
@endsection