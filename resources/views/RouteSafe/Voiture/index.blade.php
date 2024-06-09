@extends('layouts.user1')

@section('title')
Voiture
@endsection

@section('content')

<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/slide-source.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>AUTOMOBILES</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-main.html">Accueil</a></li>
                        <li class="active">Automobile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="auto-container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">

            <a class="theme-btn btn-style-one" href="{{ Route('voiture.create') }}">
                <i class="btn-curve"></i>
                <span class="btn-title">Ajouter une automobile</span>
            </a>
        </div>
    </div>

    <div class="row mt-5">
        @foreach($automobiles as $voiture)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="car-image">
                        <img class="img-fluid" src="{{ asset('storage/' . $voiture->image) }}" alt="Image de la voiture">
                        <div class="car-overlay">
                            <h4>{{ $voiture->modele }}</h4>
                        </div>
                    </div>
                    <div class="car-details">
                        <p>Marque: {{ $voiture->marque }}</p>
                        <p>Modèle: {{ $voiture->modele }}</p>
                        <p>N° d'immatriculation: {{ $voiture->immatriculation }}</p>
                        <br>
                        <a class="btn btn-warning btn-show-details" href="{{ route('detail', ['id' => $voiture->id]) }}">Plus de détail <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
