@extends('layouts.user1')

@section('title')
Factures
@endsection

@section('content')

<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/slide-source.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>FACTURES</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-main.html">Accueil</a></li>
                        <li class="active">Factures</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h1>Liste des Paiements Effectués</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Automobile</th>
                <th>Description</th>
                <th>Date de l'infraction</th>
                <th>Lieu</th>
                <th>Montant</th>
                <th>Délai de Paiement</th>
                <th>Date de Paiement</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($amendes as $amende)
                <tr>
                    <td>{{ $amende->id }}</td>
                    <td>{{ $amende->automobile->marque }} {{ $amende->automobile->modele }}</td>
                    <td>{{ $amende->description }}</td>
                    <td>{{ $amende->date_inflation }}</td>
                    <td>{{ $amende->lieu }}</td>
                    <td>{{ $amende->montant }}</td>
                    <td>{{ $amende->delaidepaiement }}</td>
                    <td>{{ $amende->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Aucun paiement effectué.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
