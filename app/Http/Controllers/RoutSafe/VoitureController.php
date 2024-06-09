<?php

namespace App\Http\Controllers\RoutSafe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Automobile;
use App\Models\TaxeVM;
use App\Models\Assurance;
use App\Models\CarteGrise;
use App\Models\VisiteTechnique;
use Illuminate\Support\Facades\Auth;

class VoitureController extends Controller
{
    // Méthode pour afficher la vue index
    public function index()
    {
        $automobiles = Automobile::all();
        return view('RouteSafe.Voiture.index', compact('automobiles')); 
    }


    public function create()
    {
        return view('RouteSafe.Voiture.create');
    }
     
    public function show($id)
    {
        $automobile = Automobile::findOrFail($id);
        return view('RouteSafe.Voiture.detail', compact('automobile'));
    }
    

   
public function store(Request $request)
{

    $user = Auth::user();

    // Validation des données du formulaire
    $request->validate([
        'marque' => 'required|string|max:255',
        'modele' => 'required|string|max:255',
        'immatriculation' => 'required|string|max:255',
        'image' => 'nullable|image',        
        'prix' => 'required|numeric',
        'date_paiementtvm' => 'required|date',
        'filetvm' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'numpolice' => 'required|string|max:255',
        'nom' => 'required|string|max:255',
        'date_paiementass' => 'required|date',
        'date_expirationass' => 'required|date',
        'fileass' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date_visite' => 'required|date',
        'date_retour' => 'required|date',
        'agence' => 'required|string|max:255',
        'filevt' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'imagecg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Création d'une nouvelle instance de voiture avec les données du formulaire
    $automobile = Automobile::create([
        'user_id' => $user->id,
        'marque' => $request->marque,
        'modele' => $request->modele,
        'immatriculation' => $request->immatriculation,
    ]);

    // Enregistrement de l'image de la voiture
    if ($request->hasFile('image')) {
        $automobile->saveImage($request->file('image'));
    }

    // Création et enregistrement de la taxe VM
    $taxevm = TaxeVM::create([
        'prix' => $request->prix,
        'date_paiementtvm' => $request->date_paiementtvm,
        'automobile_id' => $automobile->id,
    ]);
    if ($request->hasFile('filetvm')) {
        $taxevm->saveImage($request->file('filetvm'));
    }

    // Création et enregistrement de l'assurance
    $assurance = Assurance::create([
        'numpolice' => $request->numpolice,
        'nom' => $request->nom,
        'date_paiementass' => $request->date_paiementass,
        'date_expirationass' => $request->date_expirationass,
        'automobile_id' => $automobile->id,
    ]);
    if ($request->hasFile('fileass')) {
        $assurance->saveImage($request->file('fileass'));
    }

    // Création et enregistrement de la visite technique
    $visiteTechnique = VisiteTechnique::create([
        'date_visite' => $request->date_visite,
        'date_retour' => $request->date_retour,
        'agence' => $request->agence,
        'automobile_id' => $automobile->id,
    ]);
    if ($request->hasFile('filevt')) {
        $visiteTechnique->saveImage($request->file('filevt'));
    }

    // Création et enregistrement de la carte grise
    $carteGrise = CarteGrise::create([
        'automobile_id' => $automobile->id,
    ]);
    if ($request->hasFile('imagecg')) {
        $carteGrise->saveImage($request->file('imagecg'));
    }

    return redirect()->route('voiture.index')->with('success', 'Voiture ajoutée avec succès.');
}


    }
