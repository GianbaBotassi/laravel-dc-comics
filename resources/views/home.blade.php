@extends('layout.main-layout')

@section('content')
    <ul>

        @foreach ($comics as $comic)
            <div class="home">
                <a class="text-decoration-none text-dark" href="{{ route('show', $comic->id) }}">
                    <li class="list-unstyled">{{ $comic->title }}</li>
                </a>
            </div>
        @endforeach
    </ul>

    <h6><a href="{{ route('create') }}">Aggiungi fumetto</a></h6>
@endsection
