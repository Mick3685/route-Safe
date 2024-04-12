<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'User_id',
        'Numimma',
        'Dateimma',
        'Marque',
        'Modele',
        'Anneefab',
        'Num_serie_moteur',
        'Genreauto',
        'Type',
        'couleur',
        'numimmaprecedent',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

}
