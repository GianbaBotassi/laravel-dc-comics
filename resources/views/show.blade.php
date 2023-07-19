@extends('layout.main-layout')

@section('content')
    <div class="container text-center text-light">
        <h2>{{ $comics->title }}</h2>
        <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}" style="width: 300px">
        <div class="d-flex justify-content-between mt-4">
            <span class="rounded bg-secondary px-2 py-1">{{ $comics->series }}</span>
            <span class="rounded bg-secondary px-2 py-1">{{ $comics->price }}</span>
            <span class="rounded bg-secondary px-2 py-1">{{ date('Y-m-d', strtotime($comics->sale_date)) }}</span>
            <span class="rounded bg-secondary px-2 py-1">{{ $comics->type }}</span>
        </div>
        <p class="py-2">{{ $comics->description }}</p>
        <div class="d-flex justify-content-around">
            <div>
                <h4 class="bg-secondary rounded py-1 px-2 d-inline-block">Artists</h4>
                <div>
                    {{ $comics->artists }}
                </div>
            </div>
            <div>
                <h4 class="bg-secondary rounded py-1 px-2 d-inline-block">Writers</h4>
                <div class="pb-4">
                    {{ $comics->writers }}

                </div>
            </div>
        </div>
    </div>

    </div>
    </section>
    <div class="text-center mb-4">
        <a class="btn btn-primary" href="{{ route('home') }}">
            Indietro </a>
    </div>
@endsection
