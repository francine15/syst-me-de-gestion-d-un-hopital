<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom4',
        'tel4',
        'email4',
        'nom_doc2',
        'tel_doc2',
        'medecin2',
        'datecons4',
        'symptome',
        'notes3'
    ];
}
