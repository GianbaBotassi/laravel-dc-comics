@extends('layout.main-layout')

@section('content')
    <ul class="py-2">
        {{-- Ciclo fumetti attualmente nel database --}}
        @foreach ($comics as $comic)
            <li class="d-flex justify-content-center py-1">
                <a class="text-decoration-none text-white" href="{{ route('show', $comic->id) }}">
                    {{ $comic->title }}
                </a>
                <span>
                    <a class="btn btn-warning py-1 px-1 mx-3 text-decoration-none text-dark" style="font-size: 0.7rem"
                        href="{{ route('edit', $comic->id) }}">Edit</a>
                </span>
                <form method="POST" action="{{ route('destroy', $comic->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger py-1 px-1 text-decoration-none text-white"
                        style="font-size: 0.7rem">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{-- Rotta per andare al form --}}
    <h6><a class="btn btn-primary mb-2" href="{{ route('create') }}">Aggiungi fumetto</a></h6>
@endsection
