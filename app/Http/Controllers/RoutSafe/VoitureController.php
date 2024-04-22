<?php

namespace App\Http\Controllers\RoutSafe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assurance;
use App\Models\CarteGrise;
use App\Models\Automobile; // Correction ici
use App\Models\User;
use App\Models\VisteTechnique; // Correction ici
use Illuminate\Support\Facades\Auth;

class VoitureController extends Controller
{
    // Méthode pour afficher la vue index
    public function index()
    {
        return view('RouteSafe.Voiture.index');
    }

    // Méthode pour afficher la vue create
   /* public function create()
    {
        return view('RouteSafe.Voiture.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire pour la voiture
        $request->validate([
            'num_immat' => 'required|string|max:255',
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'date_immat' => 'required|date',
            'num_immat_precedent' => 'nullable|string|max:255',
        ]);

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Créer une nouvelle voiture avec les données du formulaire et l'ID de l'utilisateur connecté
        $voiture = Automobile::create([
            'num_immat' => $request->num_immat,
            'marque' => $request->marque,
            'modele' => $request->modele,
            'date_immat' => $request->date_immat,
            'num_immat_precedent' => $request->num_immat_precedent,
        ]);

        // Créer un nouveau contrôle technique pour la voiture
        $visteTechnique = VisteTechnique::create([ // Correction ici
            'id_automobile' => $voiture->id,
            'date_controle' => now(),
            'date_prochain_controle' => now()->addDays(30),
            'lieu_controle' => $request->lieu_controle,
        ]);

        // Créer un nouveau paiement pour la voiture (cette partie n'était pas claire, donc je l'ai supprimée)

        // Créer une nouvelle carte grise pour la voiture
        $cartegrise = CarteGrise::create([
            'id_automobile' => $voiture->id,
            'num_carte' => $request->num_carte,
            'date_emission' => $request->date_emission,
            'date_expiration' => $request->date_expiration,
        ]);

        // Créer une nouvelle assurance pour la voiture
        $assurance = Assurance::create([
            'id_automobile' => $voiture->id,
            'nom_assurance' => $request->nom_assurance,
            'prix_assurance' => $request->prix_assurance,
            'compagnie_assurance' => $request->compagnie_assurance,
            'num_police' => $request->num_police,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);

        // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
        return redirect()->route('nom_de_la_route_vers_la_page_de_confirmation');
    }**/
}
