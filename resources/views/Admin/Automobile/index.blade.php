@extends('layouts.admin')

@section('content')
<br>
<br>
    <div class="container">
        <h1>Liste des Automobiles</h1>
        
        <!-- Formulaire de recherche -->
        <form action="{{ route('admin.automobiles.search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="immatriculation" class="form-control" placeholder="Entrez l'immatriculation de la voiture" required>
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
        </form>

        <!-- Tableau des automobiles -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Immatriculation</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($automobiles->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Aucune automobile trouvée.</td>
                    </tr>
                @else
                    @foreach ($automobiles as $automobile)
                        <tr>
                            <td>{{ $automobile->id }}</td>
                            <td>{{ $automobile->marque }}</td>
                            <td>{{ $automobile->modele }}</td>
                            <td>{{ $automobile->immatriculation }}</td>
                            <td>
                                @if ($automobile->image)
                                    <img src="{{ asset('storage/' . $automobile->image) }}" alt="Image de {{ $automobile->modele }}" width="100">
                                @else
                                    Pas d'image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.amendes.create', $automobile->id) }}" class="btn btn-warning">Amende</a>
                                
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
