<?php

namespace App\Http\Controllers;

use App\Models\Amende;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Affiche la liste des factures (amendes payées).
     */
    public function index()
    {
        // Récupérer les amendes payées
        $amendes = Amende::where('status', 'paid')->with('automobile')->get();

        return view('routesafe.facture.index', compact('amendes'));
    }
}
