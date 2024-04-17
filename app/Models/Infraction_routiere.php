<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infraction extends Model
{
    use HasFactory;
    protected $table = 'infractions';
    protected $fillable = [
        'user_automobile',
        'type',
       'raison',
        'date',
        'heure',
        'lieu',
    ];

    public function automobile()
    {
        return $this->belongsTo(automobile::class);
    }
    public function amend_infra(){
        return $this->hasMany(amend::class);
    }
}
