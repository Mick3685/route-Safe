<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automobile; // Importez le modèle Automobile

class ajoutautomobiletController extends Controller
{
    public function create()
    {
        return view('ajoutautomobile');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'N° imatriculation' => 'requied',
        ]);

        Automobile::create([
            'marque' => $request->marque,
            'modele' => $request->modele,
        ]);

        return redirect('/ajouter-automobile')->with('success', 'L\'automobile a été ajoutée avec succès !');
    }
}
