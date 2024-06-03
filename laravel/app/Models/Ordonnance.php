<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'tel',
        'email',
        'nom_doc',
        'tel_doc',
        'medecin',
        'datecons1',
        'medicament',
        'posologie'
    ];
}
