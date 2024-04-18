<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_v_m extends Model
{
    use HasFactory;
    protected $table = 't_v_m';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_automobile',
        'date_paiement',
        'date_expiration',
        'lieu_paiement',
    ];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }
}
