<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteGrise extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_cartegrise',
        'date_emission',
        'date_expiration',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

}
