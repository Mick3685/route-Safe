@extends('layouts.user1')

@section('title')
Voiture
@endsection
@section('content')

@section('content')


<section class="page-banner">
  <div class="image-layer" style="background-image:url(images/background/image-7.jpg);"></div>
  <div class="shape-1"></div>
  <div class="shape-2"></div>
  <div class="banner-inner">
      <div class="auto-container">
          <div class="inner-container clearfix">
              <h1>Mes Voiture</h1>
              <div class="page-nav">
                  <ul class="bread-crumb clearfix">
                      <li><a href="index-main.html">Accueil</a></li>
                      <li class="active">Voiture</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="auto-container mt-5">
  <div class="row">
      <div class="col-md-12 text-center">
        <a class="theme-btn btn-style-one" href="contact.html">
          <i class="btn-curve"></i>
          <span class="btn-title">Ajouter un Voiture</span>
      </a>      </div>
  </div>
</section>

@endsection
