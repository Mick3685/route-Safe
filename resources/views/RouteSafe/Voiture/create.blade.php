@extends('layouts.user1')

@section('title')
Ajouter Voiture
@endsection

@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Ajouter Voiture</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-main.html">Accueil</a></li>
                        <li class="active">Ajouter Voiture</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="auto-container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('voiture.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Marque -->
                        <div class="mb-3">
                            <label for="marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="marque" name="marque" required>
                        </div>

                        <!-- Modèle -->
                        <div class="mb-3">
                            <label for="modele" class="form-label">Modèle</label>
                            <input type="text" class="form-control" id="modele" name="modele" required>
                        </div>

                        <!-- Immatriculation -->
                        <div class="mb-3">
                            <label for="immatriculation" class="form-label">Immatriculation</label>
                            <input type="text" class="form-control" id="immatriculation" name="immatriculation" required>
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <!-- Prix Taxe -->
                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix Taxe</label>
                            <input type="number" class="form-control" id="prix" name="prix" required>
                        </div>

                        <!-- Date Paiement TVM -->
                        <div class="mb-3">
                            <label for="date_paiementtvm" class="form-label">Date Paiement TVM</label>
                            <input type="date" class="form-control" id="date_paiementtvm" name="date_paiementtvm" required>
                        </div>

                        <!-- Fichier TVM -->
                        <div class="mb-3">
                            <label for="filetvm" class="form-label">Fichier TVM</label>
                            <input type="file" class="form-control" id="filetvm" name="filetvm" required>
                        </div>

                        <!-- Numéro Police Assurance -->
                        <div class="mb-3">
                            <label for="numpolice" class="form-label">Numéro Police Assurance</label>
                            <input type="text" class="form-control" id="numpolice" name="numpolice" required>
                        </div>

                        <!-- Nom Assurance -->
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom Assurance</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>

                        <!-- Date Paiement Assurance -->
                        <div class="mb-3">
                            <label for="date_paiementass" class="form-label">Date Paiement Assurance</label>
                            <input type="date" class="form-control" id="date_paiementass" name="date_paiementass" required>
                        </div>

                        <!-- Date Expiration Assurance -->
                        <div class="mb-3">
                            <label for="date_expirationass" class="form-label">Date Expiration Assurance</label>
                            <input type="date" class="form-control" id="date_expirationass" name="date_expirationass" required>
                        </div>

                        <!-- Fichier Assurance -->
                        <div class="mb-3">
                            <label for="fileass" class="form-label">Fichier Assurance</label>
                            <input type="file" class="form-control" id="fileass" name="fileass" required>
                        </div>

                        <!-- Date Visite -->
                        <div class="mb-3">
                            <label for="date_visite" class="form-label">Date Visite Technique</label>
                            <input type="date" class="form-control" id="date_visite" name="date_visite" required>
                        </div>

                        <!-- Date Retour -->
                        <div class="mb-3">
                            <label for="date_retour" class="form-label">Date Retour Visite Technique</label>
                            <input type="date" class="form-control" id="date_retour" name="date_retour" required>
                        </div>

                        <!-- Agence -->
                        <div class="mb-3">
                            <label for="agence" class="form-label">Agence Visite Technique</label>
                            <input type="text" class="form-control" id="agence" name="agence" required>
                        </div>

                        <!-- Fichier Visite Technique -->
                        <div class="mb-3">
                            <label for="filevt" class="form-label">Fichier Visite Technique</label>
                            <input type="file" class="form-control" id="filevt" name="filevt" required>
                        </div>

                        <!-- Image Carte Grise -->
                        <div class="mb-3">
                            <label for="imagecg" class="form-label">Image Carte Grise</label>
                            <input type="file" class="form-control" id="imagecg" name="imagecg" required>
                        </div>

                        <!-- Bouton de soumission -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ajouter Voiture</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
