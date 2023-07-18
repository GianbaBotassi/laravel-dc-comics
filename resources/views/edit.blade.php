@extends('layout.main-layout')

@section('content')
    {{-- Form per inserimento dati fumetto, metodo POST con action diretta allo store --}}
    <form class="container text-light my-2" method="POST">
        @csrf
        <div class="d-flex flex-column">
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $comics->title }}">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ $comics->price }}">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ $comics->series }}">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="sale_date">Data uscita</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comics->sale_date }}">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type" value="{{ $comics->type }}">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description" value="{{ $comics->description }}">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb" value="{{ $comics->thumb }}">
            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center my-3">
            <button type="submit" class="btn btn-primary me-3">Update</button>
            <a class="btn btn-primary" href="{{ route('home') }}">Indietro</a>
        </div>

    </form>
@endsection
