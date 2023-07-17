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


    // Funziona per visualizzare al click l'elemento della tabella selezionato
    public function show($id)
    {

        $comics = Comic::findOrFail($id);

        return view('show', compact('comics'));
    }
}
