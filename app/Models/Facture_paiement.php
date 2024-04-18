<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    use HasFactory;
    protected $table = 'facture';
    protected $fillable = [
        'id_payment',
        'date_facture',
        'montant_total',
    ];

    public function payment()
    {
        return $this->belongsTo(payment::class);
    }
}
