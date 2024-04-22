<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inflation extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_automobile',
        'type',
        'descrption',
        'date_inflation',
        'lieu',
        'heure',
        
    ];

    public function automobiles()
    {
        return $this->belongsTo(Automobile::class);
    }

    public function amendes()
    {
        return $this->hasMany(Amende::class);
    }
}
