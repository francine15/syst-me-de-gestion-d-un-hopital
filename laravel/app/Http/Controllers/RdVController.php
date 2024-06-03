<?php

namespace App\Http\Controllers;

use App\Models\RdV;
use Illuminate\Http\Request;

class RdVController extends Controller
{
public function rendez_vous() 
{
    return view('patients.rendez_vous');

}
public function insertion (Request $request)
{
    
 $request->validate([
     'nom'=>'required|string',
     'prenom'=>'required|string',
     'tel'=>'required|string',
     'email'=>'required|string',
     'nomD'=>'required|string',
     'telD'=>'required|string',
     'medecin'=>'required|string',
     'dateRdV'=>'required|date',
     'heure'=>'required|string',
     'motif'=>'required|string',
 ]);
 $patient=new RdV();
 $patient->nom=$request->nom;
  $patient->prenom=$request->prenom;
  $patient->tel=$request->tel;
  $patient->email=$request->email;
  $patient->nomD=$request->nomD;
  $patient->telD=$request->telD;
  $patient->medecin=$request->medecin;
  $patient->dateRdV=$request->dateRdV;
  $patient->heure=$request->heure;
  $patient->motif=$request->motif;
  $patient->save();
  return redirect('/ajout');
    
}
}
