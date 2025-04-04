<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();


            // id
            // Titolo
            // descrizione
            // testo
            // immagine
            // categoria
            // autore


            $table->string('titolo');
            $table->string('descrizione');
            $table->text('testo');
            $table->string('immagine');
            $table->string('categoria');
            $table->string('autore');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
