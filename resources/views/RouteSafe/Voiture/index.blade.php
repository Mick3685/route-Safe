@extends('layouts.user1')

@section('content')

<section class="page-title-area bg-img" data-bg-img="{{ url('images/update-01-10-2021/services/assurance-auto.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-content">
            <h2 class="title">Mes <span>Voitures</span></h2>
          </div>
        </div>
      </div>
    </div>
</section> <br>

<section class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary green">Ajouter une voiture</button>
        </div>
        <div class="col-md-6">
            <h3 class="mb-4">Liste des voitures</h3>
            <ul class="list-group">
             
            </ul>
        </div>
    </div>
</section>

@endsection
