@extends('layouts.main')

@section('content')
   <main class="sc-container d-flex justify-content-center align-items-center flex-column">
    <h1 class="py-3">Benvenuto in Boolean Trains</h1>
    <h3 class="py-3">Ecco la lista di treni disponibili</h3>
    <a class="btn btn-success" href="{{ route('trains') }}" role="button">Clicca qui</a>
   </main>
@endsection