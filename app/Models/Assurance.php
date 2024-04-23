<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;
    protected $fillable=[
        'automobile_id',
        'numpolice',
        'nom',
        'date_paiementass', 
        'date_expirationass',
        'fileass'
    ];
    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->fileass = $image->store('Assurance', 'public');
        $this->save();

    }

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class);
    }
}
