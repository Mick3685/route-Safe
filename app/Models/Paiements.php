<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiements extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'montant_payé',
        'date_paiement',
        'moyen_de_paiement',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Facture_paiement()
    {
        return $this->hasOne(Facture_paiement::class);
    }
}
