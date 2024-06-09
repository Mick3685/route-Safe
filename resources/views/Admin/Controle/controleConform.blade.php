@extends('layouts.admin')

@section('title', 'Admin Contrôle')

@section('content')

<!-- Page Banner Section -->
<section class="page-banner">
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner text-center">
        <br><br>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1 class="text-white"> CONTROLE DU PARC AUTOMOBILE NATIONALE </h1>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<div class="container mt-5">
    <div class="text-center">
        <h3> Contrôler la conformité des automobiles  </h3>
    </div>

    <section class="assurance-automobile mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8"; style="width: 100%" >
                <div class="card shadow">
                    <div class="card-body">
                        <form style="background-color: rgb(243, 206, 158)"; style="width: 100%">
                            @csrf
                            <div class="form-group text-center">
                                <h4>N° d'immatriculation de l'automobile</h4>
                               <center> <div class="input-group mt-3">
                                    <input type="text" class="form-control" placeholder="Example: XX0000RB" aria-label="Immatriculation">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Contrôler</button>
                                    </div>
                                </div>
                               </center>
                            </div>
                        </form>
                        <hr>
                        <center><div class="mt-4">
                            <h5>Statut de l'Assurance</h5>
                            <p class="text-muted">Détails sur l'assurance de automobile...</p>
                            <h5>Conformité au Paiement des Taxes</h5>
                            <p class="text-muted">Détails sur les taxes payées par le citoyen...</p>
                            <h5>Visites Techniques</h5>
                            <p class="text-muted">Détails sur les visites techniques faites par l'automobile...</p>
                        </div></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
