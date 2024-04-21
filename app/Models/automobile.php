<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class automobile extends Model
{
    use HasFactory;
    protected $table = 'automobiles';
    protected $fillable = [
        'id_User',
        'num_immat',
        'marque',
        'modele',
        'date_immat',
        'num_immat_precedent',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,);
    }

    public function assurances()
    {
        return $this->hasMany(Assurance::class);
    }

    public function carte_grise(){
        return $this->hasOne(carte_grise::class);
    }

    public function controle_technique(){
        return $this->hasMany(controle_technique::class);
    }
    public function tvm(){
        return $this->hasMany(t_v_m::class);
    }
    public function infraction(){
        return $this->hasMany(infraction::class);
    }
} 




