<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amende extends Model
{
    use HasFactory;

    protected $fillable = [
        'automobile_id',
        'description',
        'date_inflation',
        'lieu',
        'montant',
        'delaidepaiement',
        'status'
    ];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }
}
