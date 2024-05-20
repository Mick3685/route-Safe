@extends('layouts.user1')

@section('title')
Statut
@endsection

@section('content')

<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/R.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contrôle de conformité</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-main.html">Accueil</a></li>
                        <li class="active">statut</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<center><h4 class="sec-title-six__title" style="text-align: justify; width: 80%; margin-left:10px; margin-right:10px" >Le numéro d'immatriculation de votre automobile vous permettra 
    d'avoir des informations essentielles sur son assurance, sa coformité au paiement des taxes, ses visites techniques ... </h4></center>
<br>
<br>
<section class="assurance-automobile">
    <div class="auto-container">
        <div class="statut-box">
            <h4>Entrez le n° d'immatriculation</h4>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Example: XX 0000 RB">
                <button class="btn btn-primary">Contrôler</button>
            </div>
        </div>
    </div>
    <br>
</section>


