<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'id_User',
        'montant_paye',
        'date_payment',
        'moyen_de_paiement',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function facture()
    {
        return $this->hasOne(facture::class);
    }
    
}
