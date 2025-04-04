<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\publicController;





Route::get('/', [blogController::class, 'index'])->name('homepage');



// per la pagina contattaci
Route::get('/contattaci', [publicController::class, 'contattaci'])->name('contattaci');


// per la pagina inserisci post
Route::get('/inserisci', [blogController::class, 'inserisciPost'])->name('inserisciPost');



Route::post('/nuovo',[BlogController::class, 'store'])->name('nuovo');