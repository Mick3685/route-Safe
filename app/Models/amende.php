<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amende extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_inflation',
        'montant',
        'delaidepaiement',
       
    ];

    public function inflations()
    {
        return $this->belongsTo(Inflation::class);
    }

}
