<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Visibility;

class automobile extends Model
{
    use HasFactory;
    protected $fillable = [
        'User_id',
        'Numimma',
        'Dateimma',
        'Marque',
        'Modele',
        'Anneefab',
        'Num_serie_moteur',
        'Genreauto',
        'Type',
        'couleur',
        'numimmaprecedent',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

         public function User()
         {
             return $this->belongsTo(User::class);
           }
           public function assurance()
           {
               return $this->hasMany(assurance::class);
           }
           public function CarteGrise()
           {
               return $this->hasOne(CarteGrise::class);
           }
           public function tvm()
           {
               return $this->hasMany(tvm::class);
           }
           public function VisiteTechnique()
           {
               return $this->hasMany(VisiteTechnique::class);
           }
           public function droits_de_doine()
           {
               return $this->hasMany(droits_de_douane::class);
           }
           public function infraction_routiere()
           {
               return $this->hasMany(Infraction_routiere::class);
           }
     }
     


