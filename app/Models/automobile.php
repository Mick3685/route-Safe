<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_user',
        'marque',
        'modele',
        'immatriculation',
        'image'
        
    ];


    protected $table = 'automobiles';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartesGrises()
    {
        return $this->hasOne(CarteGrise::class);
    }

    public function assurances()
    {
        return $this->hasOne(Assurance::class);
    }

    public function visitesTechniques()
    {
        return $this->hasMany(VisiteTechnique::class);
    }

    public function inflations()
    {
        return $this->hasMany(Inflation::class);
    }

    public function taxevms()
    {
        return $this->hasOne(TaxeVM::class);
    }



   
    
}
