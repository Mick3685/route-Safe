<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class droits_de_douane extends Model
{
    use HasFactory;
    protected $fillable = [
        'automobile_id',
        'agence_de_paiement',
        'date_paiement',
        'date_expiration',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function automobile()
    {
        return $this->belongsTo(automobile::class);
    }
}
