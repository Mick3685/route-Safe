<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'Numimma',
        'Dateimma',
        'Marque',
        'Modele',
        'Anneefab',
        'Numseriemoteur',
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
