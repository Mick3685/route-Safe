<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_automobile',
        'numpolice',
        'nom',
        'date_paiement', 
        'date_expiration',
        'fileass'
    ];

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class);
    }
}
