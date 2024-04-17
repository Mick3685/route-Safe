<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controle_technique extends Model
{
    use HasFactory;
    protected $table = 'controle_technique';
    protected $primaryKey = 'id_controle_technique';
    protected $fillable = [
        'id_automobile',
        'date_controle',
        'date_prochain_controle',
        'lieu_controle',
    ];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }

}
