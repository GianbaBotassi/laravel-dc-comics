@extends('layout.main-layout')

@section('content')
    {{-- Form per inserimento dati fumetto, metodo POST con action diretta allo store --}}
    <form class="container text-light my-2" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="d-flex flex-column align-items-center">
            <div class="input-cont mt-1  @error('title') is-invalid @enderror">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
                @error('title')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('price') is-invalid @enderror">
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
                @error('price')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('series') is-invalid @enderror">
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
                @error('series')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('sale_date') is-invalid @enderror">
                <label for="sale_date">Data uscita</label>
                <input type="date" name="sale_date" id="sale_date">
                @error('sale_date')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('type') is-invalid @enderror">
                <label for="type">Tipologia</label>
                <input type="text" name="type" id="type">
                @error('type')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('description') is-invalid @enderror">
                <label for="description">Descrizione</label>
                <textarea type="text" name="description" id="description">
                </textarea>
                @error('description')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('thumb') is-invalid @enderror">
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb">
                @error('thumb')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('artists') is-invalid @enderror">
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists">
                @error('artists')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-cont mt-1 @error('writers') is-invalid @enderror">
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers">
                @error('writers')
                    <span class="alert alert-danger my-1 errors py-1">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center my-3">
            <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
            <a class="btn btn-primary" href="{{ route('home') }}">Indietro</a>
        </div>

    </form>
@endsection
