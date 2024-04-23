<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteTechnique extends Model
{
    use HasFactory;

    protected $fillable =[
        'automobile_id',
        'date_visite',
        'date_retour',
        'agence',
        'filevt'
    ];
    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->filevt = $image->store('visitetechnique', 'public');
        $this->save();

    }

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class, 'id_automobile');
    }
}
