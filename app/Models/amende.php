<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amende extends Model
{
    use HasFactory;
    protected $fillable = [
        'infraction_routiere_id',
        'delai_paiement_amende',
        ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
}
