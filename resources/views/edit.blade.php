@extends('layout.main-layout')

@section('content')
    {{-- Form per inserimento dati fumetto, metodo POST con action diretta allo store --}}
    <form class="container text-light my-2" method="POST" action="{{ route('update', $comics->id) }}">
        @csrf
        @method('PUT')
        <div class="d-flex flex-column align-items-center">
            <div class="input-cont mt-1">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $comics->title }}">
            </div>
            <div class="input-cont mt-1">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ $comics->price }}">
            </div>
            <div class="input-cont mt-1">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ $comics->series }}">
            </div>
            <div class="input-cont mt-1">
                <label for="sale_date">Data uscita</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comics->sale_date }}">
            </div>
            <div class="input-cont mt-1">
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type" value="{{ $comics->type }}">
            </div>
            <div class="input-cont mt-1">
                <label for="description">Descrizione</label>
                <input style="height: 50px" type="text" name="description" id="description"
                    value="{{ $comics->description }}">
            </div>
            <div class="input-cont mt-1">
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb" value="{{ $comics->thumb }}">
            </div>
            <div class="input-cont mt-1">
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists" value="{{ $comics->artists }}">
            </div>
            <div class="input-cont mt-1">
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers" value="{{ $comics->writers }}">
            </div>
            <div class="d-flex justify-content-center align-items-center my-3">
                <button type="submit" class="btn btn-primary me-3">Update</button>
                <a class="btn btn-primary" href="{{ route('home') }}">Indietro</a>
            </div>

    </form>
@endsection
