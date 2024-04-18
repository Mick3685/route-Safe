<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amend extends Model
{
    use HasFactory;
    protected $table = 'amend';
    protected $primaryKey = 'id_amend';
    protected $fillable = [
        'id_infraction',
        'delai_de_paiement',
    ];

    public function infraction(){
        return $this->belongsTo(infraction::class);
    }
}
