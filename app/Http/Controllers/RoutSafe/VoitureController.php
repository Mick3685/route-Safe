<?php

namespace App\Http\Controllers\RoutSafe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    // Méthode pour afficher la vue index
    public function index()
    {
        return view('RouteSafe.Voiture.index');
    }
}
