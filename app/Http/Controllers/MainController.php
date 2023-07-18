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
        $data = $request->all();

        // Stessa modalità utilizzata nel seeder, solo che i dati provengono dal form
        $comic = Comic::create([
            "title" => $data["title"],
            "description" => $data["description"],
            "thumb" => $data["thumb"],
            "price" => $data["price"],
            "series" => $data["series"],
            "sale_date" => $data["sale_date"],
            "type" => $data["type"]
        ]);

        // Decido dove voglio far tornare l'utente dopo aver inviato il form (in questo caso alla nuova card)
        return redirect()->route('show', $comic->id);
    }


    // Funziona per visualizzare al click l'elemento della tabella selezionato
    public function show($id)
    {

        $comics = Comic::findOrFail($id);

        return view('show', compact('comics'));
    }

    // edit
    public function edit(Request $request, $id)
    {

        $data = $request->all();

        $comics = Comic::findOrFail($id);

        $comics->update($data);
    }
}
