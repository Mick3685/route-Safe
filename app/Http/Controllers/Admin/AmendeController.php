<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amende;
use App\Models\Automobile;
use Illuminate\Http\Request;

class AmendeController extends Controller
{
    /**
     * Affiche le formulaire de création d'amende.
     */
    public function create($automobileId)
    {
        $automobile = Automobile::findOrFail($automobileId);
        return view('admin.amendes.create', compact('automobile'));
    }

    /**
     * Stocke une nouvelle amende.
     */
    public function store(Request $request, $automobileId)
    {
        $request->validate([
            'description' => 'nullable|string',
            'date_inflation' => 'nullable|date',
            'lieu' => 'nullable|string',
            'montant' => 'required|numeric',
            'delaidepaiement' => 'required|date',
        ]);

        $amende = new Amende();
        $amende->automobile_id = $automobileId;
        $amende->description = $request->description;
        $amende->date_inflation = $request->date_inflation;
        $amende->lieu = $request->lieu;
        $amende->montant = $request->montant;
        $amende->delaidepaiement = $request->delaidepaiement;
        $amende->save();

        return redirect()->route('admin.automobiles.index')->with('success', 'Amende envoyées avec succès.');
    }

    public function index()
    {
        $amendes = Amende::with('automobile')->get();
        return view('routesafe.amende.index', compact('amendes'));
    }
}
