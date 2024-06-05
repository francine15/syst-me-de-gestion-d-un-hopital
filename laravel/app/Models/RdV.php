<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RdV extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'email',
        'nomD',
        'telD',
        'medecin',
        'date',
        'heure',
        'motif'
    ];
}
