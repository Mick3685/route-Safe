<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxeVM extends Model
{
    use HasFactory;

    protected $fillable=[
        'automobile_id',
        'prix',
        'date_paiementtvm',
        'filetvm'       
    ];

    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->filetvm = $image->store('taxevm', 'public');
        $this->save();

    }
    public function automobiles()
    {
        return $this->belongsTo(Automobile::class);
    }
}
