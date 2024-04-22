<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteGrise extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_automobile',
        'image'
    ];

    public function Automobile(){
        return $this->belongsTo(Automobile::class);
    }

}
