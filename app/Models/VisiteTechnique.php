<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteTechnique extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_automobile',
        'date_visite',
        'date_retour',
        'agence',
        'filevt'
    ];

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class, 'id_automobile');
    }
}
