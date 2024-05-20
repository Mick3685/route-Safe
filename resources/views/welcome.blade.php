@extends('layouts._user')
@section('title')
Welcome
@endsection


@section('content')

<div class="page-wrapper">

    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="welcome-section bg-light py-5" style="background-color: #ffaa17;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Bienvenue sur Route-SAFE</h1>
                    <div class="col-md-12 col-lg-6 wow fadeInLeft animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInLeft;" style="display: inline-flex">
                        <div class="about-seven__images">
                            <img src="images/update-01-10-2021/services/kdhk.jpg" alt="">
                        </div>
                    </div>
                    <h2 class="lead">La plateforme pour l'optimisation de la Conformité au Paiement des Taxes Automobiles et l'Amélioration de la Sécurité Routière</h2>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 me-sm-3" style="background-color: #ffaa17; border-color: #ffaa17;">Inscrivez-vous</a>
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg px-4" style="color: #ffaa17; border-color: #ffaa17;">Connexion</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold  mb-4" style="color: #ffaa17;">Pourquoi choisir Route-SAFE ?</h2>
                <p class="lead text-secondary">Découvrez les fonctionnalités qui rendent notre plateforme unique</p>
            </div>
            <div class="row gx-5">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                            <h3 class="card-title mb-3">Transactions sécurisées</h3>
                            <p class="card-text text-muted">Assurez-vous que vos données et transactions sont sécurisées à tout moment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-car fa-3x text-success mb-3" ></i>
                            <h3 class="card-title mb-3">Optimisation des Taxes</h3>
                            <p class="card-text text-muted">Gérez efficacement le paiement de vos taxes automobiles pour éviter les pénalités.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-road fa-3x text-success mb-3"></i>
                            <h3 class="card-title mb-3">Sécurité Routière</h3>
                            <p class="card-text text-muted">Contribuez à améliorer la sécurité sur les routes en participant à notre réseau.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
