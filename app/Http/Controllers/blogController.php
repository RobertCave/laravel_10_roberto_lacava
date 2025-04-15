<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Posts;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function inserisciPost()
    {
        return view('inserisci');
    }




    public function store(PostRequest $request)
    {

        // Spostamento dei dati all'oggetto presi dal form
        $titolo = $request->titolo;
        $descrizione = $request->descrizione;
        $testo = $request->testo;

        if ($request->file('immagine')) {
            $immagine = $request->file('immagine')->store('/images') ;
        } else {
            $immagine = "/images/blog-post.png";
        }
        


        $categoria = $request->categoria;
        $autore = $request->autore;
  

        Posts::create([
            'titolo' => $titolo,
            'descrizione' => $descrizione,
            'testo' => $testo,
            'immagine' => $immagine,
            'categoria' => $categoria,
            'autore' => $autore,

        ]);

        // //Cosa fa dopo aver salvato sul database ?
        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito in database');


    }


    public function index() {

        // Sto richiedendo al mio Db tutti i post all'interno della tabella 

        $posts = Posts::all();

        return view('index',['posts'=> $posts]);

    }

}
