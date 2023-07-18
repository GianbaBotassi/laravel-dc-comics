@extends('layout.main-layout')

@section('content')
    <ul class="py-2">
        {{-- Ciclo fumetti attualmente nel database --}}
        @foreach ($comics as $comic)
            <div class="home">
                <a class="text-decoration-none text-dark" href="{{ route('show', $comic->id) }}">
                    <li class="list-unstyled">{{ $comic->title }}</li>
                </a>
            </div>
        @endforeach
    </ul>

    {{-- Rotta per andare al form --}}
    <h6><a class="btn btn-primary mb-2" href="{{ route('create') }}">Aggiungi fumetto</a></h6>
@endsection
