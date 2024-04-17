<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carte_grise extends Model
{
    use HasFactory;
    protected $table = 'carte_grises';
    protected $fillable = [
        'id_automobile',
        'num_carte',
        'date_emission',
        'date_expiration',
    ];

    public function automobile()
    {
        return $this->belongsTo(Automobile::class);
    }
}
