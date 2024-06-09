@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Détails de la voiture</h1>
            <div class="card mb-3">
                <div class="card-header">
                    <h2>{{ $automobile->marque }} {{ $automobile->modele }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @if($automobile->image)
                                <img src="{{ asset('storage/' . $automobile->image) }}" alt="Image de la voiture" class="img-fluid">
                            @else
                                <p>Pas d'image disponible pour cette voiture</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <p><strong>Immatriculation:</strong> {{ $automobile->immatriculation }}</p>
                            <p><strong>Date de paiement de la taxe VM:</strong> {{ $automobile->taxeVM->date_paiementtvm }}</p>
                            <p><strong>Numéro de police d'assurance:</strong> {{ $automobile->assurance->numpolice }}</p>
                            <p><strong>Nom de l'assurance:</strong> {{ $automobile->assurance->nom }}</p>
                            <p><strong>Date de paiement de l'assurance:</strong> {{ $automobile->assurance->date_paiementass }}</p>
                            <p><strong>Date d'expiration de l'assurance:</strong> {{ $automobile->assurance->date_expirationass }}</p>
                            <p><strong>Date de visite technique:</strong> {{ $automobile->visiteTechnique->date_visite }}</p>
                            <p><strong>Date de retour de visite technique:</strong> {{ $automobile->visiteTechnique->date_retour }}</p>
                            <p><strong>Agence de visite technique:</strong> {{ $automobile->visiteTechnique->agence }}</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                       
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('voiture.index') }}" class="btn btn-primary">Retour à la liste des voitures</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
