<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraction_routiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'automobile_id',
        'description_infraction',
        'date_infraction',
        'heure_infraction',
        'lieu_infraction',
        'type_infraction',
        'montant_amende',
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
    public function amende()
    {
        return $this->hasOne(amende::class);
    }
}
