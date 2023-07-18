@extends('layout.main-layout')

@section('content')
    {{-- Form per inserimento dati fumetto, metodo POST con action diretta allo store --}}
    <form class="container text-light my-2" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="d-flex flex-column">
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" style="width: 300px">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" style="width: 300px">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" style="width: 300px">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="sale_date">Data uscita</label>
                <input type="date" name="sale_date" id="sale_date" style="width: 300px">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type" style="width: 300px">
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="description">Descrizione</label>
                <textarea type="text" name="description" id="description" style="width: 300px">
                </textarea>
            </div>
            <div class="my-1 d-flex flex-column align-items-center">
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb" style="width: 300px">
            </div>

        </div>

        <button type="submit" class="btn btn-primary my-2">Aggiungi</button>
    </form>
@endsection
