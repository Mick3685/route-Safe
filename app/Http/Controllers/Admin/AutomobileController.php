<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Automobile;
use Illuminate\Http\Request;

class AutomobileController extends Controller
{
    /**
     * Affiche la liste des automobiles.
     */
    public function index()
    {
        // Récupérer toutes les automobiles
        $automobiles = Automobile::all();
        
        // Passer les automobiles à la vue
        return view('admin.automobile.index', compact('automobiles'));
    }

    /**
     * Recherche les automobiles par immatriculation.
     */
    public function search(Request $request)
    {
        $immatriculation = $request->input('immatriculation');
        $automobiles = Automobile::where('immatriculation', 'like', '%' . $immatriculation . '%')->get();

        return view('admin.automobile.index', compact('automobiles'));
    }
}
