<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

// Routes pour les opérations CRUD sur les étudiants

Route::resource('etudiants', EtudiantController::class);
// Route pour la recherche d'étudiants
Route::get('/etudiants/rechercher', 'EtudiantController@search')->name('etudiants.search');

// Routes manquantes pour les opérations CRUD
Route::get('/etudiants/{id}', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('/etudiants/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('/etudiants/{etudiant}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::delete('/etudiants/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');
Route::get('/etudiants/rechercher', 'EtudiantController@search')->name('etudiants.search');


// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
