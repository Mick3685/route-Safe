<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteTechnique extends Model
{
    use HasFactory;
    protected $fillable = [
        'autombile_id',
        'agence_de_visite',
        'date_viste',
        'date_expiration',
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
