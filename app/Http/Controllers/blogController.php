<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function inserisciPost()
    {
        return view('inserisci');
    }




    public function store(Request $request)
    {

        // // // // Creazione oggetto $blog
        $post = new Posts();

        // Spostamento dei dati all'oggetto presi dal form
        $post->titolo = $request->titolo;
        $post->descrizione = $request->descrizione;
        $post->testo = $request->testo;
        $post->immagine = "/images/blog-post.png";
        $post->categoria = $request->categoria;
        $post->autore = $request->autore;

    

// // // // Salvataggio del prodotto nel DATABASE

                $post->save();

        // //Cosa fa dopo aver salvato sul database ?
        return redirect()->back();

    }


    public function index() {

        // Sto richiedendo al mio Db tutti i post all'interno della tabella 

        $posts = Posts::all();

        return view('index',['posts'=> $posts]);

    }

}
