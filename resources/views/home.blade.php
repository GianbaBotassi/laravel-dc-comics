@extends('layout.main-layout')

@section('content')
    <ul class="py-2">

        {{-- Ciclo fumetti attualmente nel database --}}
        @foreach ($comics as $comic)
            @php
                
                // Assegno una variabile con l'id per ogni elemento ciclato (non posso mettere solo l'id perchè non può essere solo un numero)
                $modalId = 'modale_' . $comic->id;
                
            @endphp

            <li class="d-flex justify-content-center py-1">
                <a class="text-decoration-none text-white" href="{{ route('show', $comic->id) }}">
                    {{ $comic->title }}
                </a>

                {{-- Bottone per edit --}}
                <span>
                    <a class="btn btn-warning py-1 px-1 mx-3 text-decoration-none text-dark" style="font-size: 0.7rem"
                        href="{{ route('edit', $comic->id) }}">Edit</a>
                </span>

                {{-- Bottone per modale in cui richiamo come data-target la variabile contenente l'id --}}
                <button class="btn btn-danger py-1 px-1 text-decoration-none text-white" style="font-size: 0.7rem"
                    type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $modalId }}">
                    Elimina
                </button>

                {{-- Modale che viene richiamata in base alla variabile id creata in precedenza --}}
                <div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-dark">
                                Sei sicuro di voler eliminare questo elemento?
                            </div>
                            <div class="modal-footer">

                                {{-- Bottone per eliminare --}}
                                <form method="POST" action="{{ route('destroy', $comic->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-danger py-1 px-1 text-decoration-none text-white">Elimina</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Indietro</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>



    {{-- Rotta per andare al form --}}
    <h6><a class="btn btn-primary mb-2" href="{{ route('create') }}">Aggiungi fumetto</a></h6>
@endsection
