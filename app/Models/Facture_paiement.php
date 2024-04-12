<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture_paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'Paiement_id',
        'date_creation_facture',
        'montant_total',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function paiements()
    {
        return $this->hasMany(paiements::class);
    }
}
