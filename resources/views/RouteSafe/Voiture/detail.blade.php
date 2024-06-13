@extends('layouts.user1')

@section('content')


    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/background/slide-source.jpg);"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>{{ $automobile->marque }}</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-main.html">Accueil</a></li>
                            <li><a href="index-main.html">Voiture</a></li>
                            <li class="active">{{ $automobile->marque }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Détails de la voiture</h1>
                <div class="card mb-3 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2>{{ $automobile->marque }} {{ $automobile->modele }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @if ($automobile->image)
                                    <img src="{{ asset('storage/' . $automobile->image) }}" alt="Image de la voiture"
                                        class="img-fluid rounded">
                                @else
                                    <p class="text-muted">Pas d'image disponible pour cette voiture</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <p><strong>Immatriculation:</strong> <span
                                        class="badge bg-info text-dark">{{ $automobile->immatriculation }}</span></p>

                                @if ($automobile->taxevms->isNotEmpty())
                                    <div class="mb-3">
                                        <h5>Taxes VM</h5>
                                        <ul class="list-group">
                                            @foreach ($automobile->taxevms as $tax)
                                                <li class="list-group-item">
                                                    <strong>Date de paiement:</strong> {{ $tax->date_paiementtvm }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                    <p><strong>Date de paiement de la taxe VM:</strong> <span class="badge bg-secondary">Non
                                            disponible</span></p>
                                @endif

                                @if ($automobile->assurances->isNotEmpty())
                                    <div class="mb-3">
                                        <h5>Assurances</h5>
                                        <ul class="list-group">
                                            @foreach ($automobile->assurances as $assurance)
                                                <li class="list-group-item">
                                                    <strong>Numéro de police:</strong> {{ $assurance->numpolice }}<br>
                                                    <strong>Nom de l'assurance:</strong> {{ $assurance->nom }}<br>
                                                    <strong>Date de paiement:</strong>
                                                    {{ $assurance->date_paiementass }}<br>
                                                    <strong>Date d'expiration:</strong> {{ $assurance->date_expirationass }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                    <p><strong>Informations sur l'assurance:</strong> <span class="badge bg-secondary">Non
                                            disponible</span></p>
                                @endif

                                @if ($automobile->visitesTechniques->isNotEmpty())
                                    <div class="mb-3">
                                        <h5>Visites Techniques</h5>
                                        <ul class="list-group">
                                            @foreach ($automobile->visitesTechniques as $visiteTechnique)
                                                <li class="list-group-item">
                                                    <strong>Date de visite:</strong> {{ $visiteTechnique->date_visite }}<br>
                                                    <strong>Date de retour:</strong>
                                                    {{ $visiteTechnique->date_retour }}<br>
                                                    <strong>Agence:</strong> {{ $visiteTechnique->agence }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                    <p><strong>Informations sur la visite technique:</strong> <span
                                            class="badge bg-secondary">Non disponible</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ route('voiture.index') }}" class="btn btn-primary">Retour à la liste des voitures</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
