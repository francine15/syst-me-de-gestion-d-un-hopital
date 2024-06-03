<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom3',
        'tel2',
        'email2',
        'nom_doc1',
        'tel_doc1',
        'medecin1',
        'datecons2',
        'datecons2',
        'notes2'
    ];
}
