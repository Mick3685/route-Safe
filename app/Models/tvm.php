<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tvm extends Model
{
    use HasFactory;
    protected $fillable = [
        'agence_de_paiement',
        'date_paiement',
        'date_expiration',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

}
