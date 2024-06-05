<?php

namespace App\Http\Controllers;

use App\Models\RdV;
use Illuminate\Http\Request;
use Exception;

class RdVController extends Controller
{
public function rendez_vous() 
{
    return view('patients.rendez_vous');

}
public function affiche(){
    $patient=Rdv::all();
    return view('patients.liste_rdv',compact('patient'));
}
public function insertion (Request $request)
{ try{
   
    $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'tel'=>'required|string',
        'email'=>'required|string',
        'nomD'=>'required|string',
        'telD'=>'required|string',
        'medecin'=>'required|string',
        'date'=>'required|date',
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
     $patient->dateRdV=$request->date;
     $patient->heure=$request->heure;
     $patient->motif=$request->motif;
     $patient->save();
     
     return redirect('/ajout');

}catch(Exception $e){
    $messageErreur=$e->getMessage();
$message= ['sucess'=> false, 'error'=>$messageErreur];
return response()->json($message,500);
}
 
 
}
public function supprimer($id) 
{
    $patient=RdV::find($id);
    $patient->delete();
    return back();

}
public function modifier($id) 
{
    $patient=RdV::find($id);
    return view('patients.modifier',compact('patient'));

}
public function modifier_traitement(Request $request){
    try{
   
        $request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'tel'=>'required|string',
            'email'=>'required|string',
            'nomD'=>'required|string',
            'telD'=>'required|string',
            'medecin'=>'required|string',
            'date'=>'required|date',
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
         $patient->dateRdV=$request->date;
         $patient->heure=$request->heure;
         $patient->motif=$request->motif;
         $patient->update();
         
         return redirect('/liste_rdv');
    
    }catch(Exception $e){
        $messageErreur=$e->getMessage();
    $message= ['sucess'=> false, 'error'=>$messageErreur];
    return response()->json($message,500);
    }
}
}
