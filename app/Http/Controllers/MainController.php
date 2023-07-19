<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{

    // Funzione classica per visualizzare tutta la tabella
    public function index()
    {

        $comics = Comic::all();

        return view('home', compact('comics'));
    }

    // Funzione per raggiungere il form
    public function create()
    {

        return view('create');
    }

    // Funzione che prende i dati inviati dal form e li inserisce nel database
    public function store(Request $request)
    {

        // Dati presi da form
        $data = $request->validate($this->validationRules(), $this->validationErrors());

        // Stessa modalità utilizzata nel seeder, solo che i dati provengono dal form
        $comic = Comic::create($data);

        // Decido dove voglio far tornare l'utente dopo aver inviato il form (in questo caso alla nuova card)
        return redirect()->route('show', $comic->id);
    }


    // Funziona per visualizzare al click l'elemento della tabella selezionato
    public function show($id)
    {

        $comics = Comic::findOrFail($id);

        return view('show', compact('comics'));
    }

    // Funzione che mostra l'id scelto e consente di modificare
    public function edit($id)
    {

        $comics = Comic::findOrFail($id);

        return view('edit', compact('comics'));
    }

    // Funzione per update, prendo i dati inseriti e li modifico nel db
    public function update(Request $request, $id)
    {

        $data = $request->validate($this->validationRules(), $this->validationErrors());

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('show', $comic->id);
    }

    // Funzione per eliminare elemento
    public function destroy($id)
    {

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('home');
    }

    private function validationRules()
    {
        return [
            'title' => 'required|unique:comics|min:5|max:255',
            'description' => 'required|max:1000',
            'thumb' => "required",
            'price' => "required",
            'series' => "required",
            'sale_date' => "required|date",
            'type' => "required"
        ];
    }
    private function validationErrors()
    {
        return [
            'required' => 'Dato mancante.',
            'title.min' => 'Inserisci almeno 5 caratteri.',
            'title.max' => 'Ammessi massimo 255 caratteri.',
            'title.unique' => 'Non puoi inserire lo stesso titolo.',
            'description.max' => 'Ammessi massimo 1000 caratteri.',
            'sale_date.date' => 'Inserire un formato data corretto.'
        ];
    }
}
