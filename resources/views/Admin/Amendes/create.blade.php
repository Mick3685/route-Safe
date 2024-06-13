@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Ajouter une Amende</h1>

        <form action="{{ route('admin.amendes.store', $automobile->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="date_inflation" class="form-label">Date de l'infraction</label>
                <input type="date" name="date_inflation" id="date_inflation" class="form-control">
            </div>

            <div class="mb-3">
                <label for="lieu" class="form-label">Lieu</label>
                <input type="text" name="lieu" id="lieu" class="form-control">
            </div>

            <div class="mb-3">
                <label for="montant" class="form-label">Montant</label>
                <input type="text" name="montant" id="montant" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="delaidepaiement" class="form-label">Délai de Paiement</label>
                <input type="date" name="delaidepaiement" id="delaidepaiement" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
