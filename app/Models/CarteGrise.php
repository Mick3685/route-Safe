<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteGrise extends Model
{
    use HasFactory;
    protected $fillable = [
        'automobile_id',
        'imagecg'
    ];
    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->imagecg = $image->store('taxevm', 'public');
        $this->save();

    }

    public function Automobile(){
        return $this->belongsTo(Automobile::class);
    }

}
