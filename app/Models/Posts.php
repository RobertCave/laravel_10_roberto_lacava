<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // id
            // titolo
            // descrizione
            // testo
            // immagine
            // categoria
            // autore


    protected $fillable = [
        'titolo',
        'descrizione',
        'testo',
        'immagine',
        'categoria',
        'autore'
    ];

}
