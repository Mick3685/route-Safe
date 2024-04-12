<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;
    protected $fillable = [
        'automobile_id',
        'compagnie_assurance',
        'Num_police',
        'date_effet',
        'type_assurance',
        'date_debut_assurance',
        'date_fin_assurance',
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
