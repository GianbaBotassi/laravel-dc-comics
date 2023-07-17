@extends('layout.main-layout')

@section('content')
    {{-- Form per inserimento dati fumetto, metodo POST con action diretta allo store --}}
    <form class="container text-light my-2" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="d-flex flex-column">
            <div class="my-2">
                <input type="text" name="title" id="title">
                <label for="title">Title</label>
            </div>
            <div class="my-2">
                <input type="text" name="price" id="price">
                <label for="price">Price</label>
            </div>
            <div class="my-2">
                <input type="text" name="series" id="series">
                <label for="series">Series</label>
            </div>
            <div class="my-2">
                <input type="text" name="sale_date" id="sale_date">
                <label for="sale_date">Data uscita</label>
            </div>
            <div class="my-2">
                <input type="text" name="type" id="type">
                <label for="type">Tipologia</label>
            </div>
            <div class="my-2">
                <textarea type="text" name="description" id="description">
                </textarea>
                <label for="description">Descrizione</label>
            </div>
            <div class="my-2">
                <input type="text" name="thumb" id="thumb">
                <label for="thumb">Immagine</label>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection
