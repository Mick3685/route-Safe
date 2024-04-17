<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assurance extends Model
{
    use HasFactory;
    protected $table = 'assurances';
    protected $fillable = [
        'id_automobile',
        'nom_assurance',
        'prix_assurance',
        'compagnie_assurance',
        'num_police',
        'date_debut',
        'date_fin',
    ];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }

}
