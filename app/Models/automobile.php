<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'marque',
        'modele',
        'immatriculation',
        'image'
        
    ];

    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->image = $image->store('automobile', 'public');
        $this->save();

    }


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
        return $this->hasMany(Assurance::class);
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
        return $this->hasMany(TaxeVM::class);
    }



   
    
}
