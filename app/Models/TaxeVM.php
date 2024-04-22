<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxeVM extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_automobile',
        'prix',
        'date_paiement',
        'filetvm'       
    ];
    public function automobiles()
    {
        return $this->belongsTo(Automobile::class);
    }
}
