<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Ordonnance;
use Illuminate\Http\Request;
use \App\Models\Partient;
use App\Models\Traitement;

class PatientController extends Controller
{
    public function affiche(){
        $patient=Partient::all();
        return view('patients.suivi',compact('patient'));
    }
    public function ajout(){
        return view('patients.ajout');
    }
    public function insertion(Request $request){

        $request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'adresse'=>'required|string',
            'tel'=>'required|string',
            'email'=>'required|string',
            'jour'=>'required|date',
            'heure'=>'required|string',

        ]);
        $patient=new Partient();
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->adresse=$request->adresse;
        $patient->tel=$request->tel;
        $patient->email=$request->email;
        $patient->jour=$request->jour;
        $patient->heure=$request->heure;
        $patient->save();
         
   return redirect('/ajout')->with('statut','ajout effectue avec succes');
    }
    public function dossier($id) 
    {
        $patient=Partient::find($id);
        return view('patients.dossier',compact('patient'));

    }
    public function voir()
    {
            return view('patients.dossier');
    }
    public function ordonance(Request $request)
    {
        $request->validate([
            'nom'=>'required|string',
            'tel'=>'required|string',
            'email'=>'required|string',
            'nom_doc'=>'required|string',
            'tel_doc'=>'required|string',
            'medecin'=>'required|string',
            'datecons1'=>'required|date',
            'medicament'=>'required|string',
            'posologie'=>'required|string'

        ]);
        $patient=new Ordonnance();
       $patient->nom=$request->nom;
        $patient->tel=$request->tel;
        $patient->email=$request->email;
        $patient->nom_doc=$request->nom_doc;
        $patient->tel_doc=$request->tel_doc;
        $patient->medecin=$request->medecin;
        $patient->datecons1=$request->datecons1;
        $patient->medicament=$request->medicament;
        $patient->posologie=$request->posologie;
        $patient->save();
        return back();

    }
    public function traitement(Request $request)
   {
    $request->validate([
        'nom3'=>'required|string',
        'tel2'=>'required|string',
        'email2'=>'required|string',
        'nom_doc1'=>'required|string',
        'tel_doc1'=>'required|string',
        'medecin1'=>'required|string',
        'datecons2'=>'required|date',
        'datecons3'=>'required|string',
        'notes2'=>'required|string'
    ]);
    $patient=new Traitement();
    $patient->nom3=$request->nom3;
     $patient->tel2=$request->tel2;
     $patient->email2=$request->email2;
     $patient->nom_doc1=$request->nom_doc1;
     $patient->tel_doc1=$request->tel_doc1;
     $patient->medecin1=$request->medecin1;
     $patient->datecons2=$request->datecons2;
     $patient->datecons3=$request->datecons3;
     $patient->notes2=$request->notes2;
     $patient->save();
     return back();

   } 
   public function consultation(Request $request)
   {
    $request->validate([
        'nom4'=>'required|string',
        'tel4'=>'required|string',
        'email4'=>'required|string',
        'nom_doc2'=>'required|string',
        'tel_doc2'=>'required|string',
        'medecin2'=>'required|string',
        'datecons4'=>'required|date',
        'symptome'=>'required|string',
        'notes3'=>'required|string'
    ]);
    $patient=new Consultation();
    $patient->nom4=$request->nom4;
     $patient->tel4=$request->tel4;
     $patient->email4=$request->email4;
     $patient->nom_doc2=$request->nom_doc2;
     $patient->tel_doc2=$request->tel_doc2;
     $patient->medecin2=$request->medecin2;
     $patient->datecons4=$request->datecons4;
     $patient->symptome=$request->symptome;
     $patient->notes3=$request->notes3;
     $patient->save();
     return back();
   }

}
