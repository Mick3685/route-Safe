@extends('layouts.user1')
@section('content')
<div class="container">
    <h2 class="mb-4">Ajouter une automobile</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="post" action="/ajouter-automobile">
        @csrf
        <div class="form-group">
            <label for="marque">Marque :</label>
            <input type="text" class="form-control" id="marque" name="marque" required>
        </div>
        <div class="form-group">
            <label for="N° immatriculation">N° d'immatriculation :</label>
            <input type="text" class="form-control" id="num_imma" name="num_imma" required>
        </div>
        <div class="form-group">
            <label for="modele">Modèle :</label>
            <input type="text" class="form-control" id="modele" name="modele" required>
        </div>

        <div class="col-10 mx-auto">
            <button type="submit" class="theme-btn btn-style-one mt-6 w-full"><a>
                <i class="btn-curve"></i>
                <span  class="btn btn-primary">Ajouter</span>
           </a></button>
        </div>

    </form>
</div>
@endsection
