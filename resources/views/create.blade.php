@extends('layout.main-layout')

@section('content')
    {{-- Form per inserimento dati fumetto, metodo POST con action diretta allo store --}}
    <form class="container text-light my-2" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="d-flex flex-column">
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="sale_date">Data uscita</label>
                <input type="date" name="sale_date" id="sale_date">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="description">Descrizione</label>
                <textarea type="text" name="description" id="description">
                </textarea>
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers">
            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center my-3">
            <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
            <a class="btn btn-primary" href="{{ route('home') }}">Indietro</a>
        </div>

    </form>
@endsection
