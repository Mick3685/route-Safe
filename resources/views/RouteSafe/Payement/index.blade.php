@extends('layouts.user1')

@section('title')
paiements
@endsection
@section('content')

@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/what-is.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>PAIEMENT</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-main.html">Accueil</a></li>
                        <li class="active">Paiement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="auto-container mt-5">

    <div> 
       <center> <h2> vérifier et régulariser vos obligations fiscales et amendes routières en toute simplicité.</h2></center>
    </div>

   <center> <div class="row">
     <kkiapay-widget  amount="1" key="2aaba2001d3811efbcd52908edb4bfd1"
            callback="https://kkiapay-redirect.com" />
        </div></center>

        
        <script src="https://cdn.kkiapay.me/k.js">
</section>
<br><br>

@endsection