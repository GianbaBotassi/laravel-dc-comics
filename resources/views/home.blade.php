@extends('layout.main-layout')

@section('content')
    <ul>

        @foreach ($comics as $comic)
            <a class="text-decoration-none text-dark" href="{{ route('show', $comic->id) }}">
                <li class="list-unstyled">{{ $comic->title }}</li>
            </a>
        @endforeach
    </ul>
@endsection
