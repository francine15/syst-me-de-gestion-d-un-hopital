<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\RdVController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/suivi',[PatientController::class,'affiche'])->name('patients.suivi');
Route::get('/ajout',[PatientController::class,'ajout'])->name('patients.ajout');
Route::post('/insertion',[PatientController::class,'insertion']);
Route::get('/contenu',[PatientController::class,'voir'])->name('patients.dossier');
Route::get('/dossier/{id}',[PatientController::class,'dossier'])->name('patients.dossier');
Route::post('/consultation',[PatientController::class,'consultation']);
Route::post('/traitement',[PatientController::class,'traitement']);
Route::post('/ordonance',[PatientController::class,'ordonance']);
Route::get('/rendez-vous',[RdVController::class,'rendez_vous'])->name('patients.rendez_vous');
Route::post('/insert',[PatientController::class,'insertion']);
Route::get('/liste_rdv',[RdVController::class,'affiche'])->name('patients.liste_rdv');
Route::get('/supprimer/{id}',[RdVController::class,'supprimer']); 
Route::get('/modifier/{id}',[RdVController::class,'modifier'])->name('patients.modifier'); 
Route::post('/traitement/modifier',[RdVController::class,'modifier_traitement']);   
Route::get('/acceuil',[PatientController::class,'afficheacceuil'])->name('acceuil');
Route:: get('/supprimer/{id}',[PatientController::class,'supprimer']);