@extends('layouts._user')

@section('content')

<div class="page-wrapper">

    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="login-wrapper">
        
        <div class="login-content">
            <div class="container">
                <h1 class="text-center text-4xl mb-8">Connectez-vous</h1> <!-- Titre "Connectez-vous" ajouté ici -->
                <form method="POST" action="{{ route('login') }}" class="row g-3" id="login-form">
                    @csrf
                    <div class="text-center col-8 mx-auto">
                        <label for="email" class="block mb-1">Adresse Email *</label>
                        <input id="email" type="email" name="email" class="w-full" required>
                        <p class="text-red-500 error-message" id="email-error"></p>
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center col-8 mx-auto">
                        <label for="password" class="block mb-1">Mot de passe *</label>
                        <input id="password" type="password" name="password" class="w-full" required>
                        <p class="text-red-500 error-message" id="password-error"></p>
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Ajoute d'autres champs ou éléments de formulaire si nécessaire -->

                    <div class="col-10 mx-auto">
                        <button type="submit" class="theme-btn btn-style-one mt-6 w-full">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Se connecter</span>
                        </button>
                    </div>
                </form>

                <!-- Lien pour récupérer le mot de passe -->
                <div class="col-12 mt-2 text-center text-sm">
                    <a href="{{ route('password.request') }}" class="text-blue-500">Mot de passe oublié?</a>
                </div>

                <!-- Lien d'inscription -->
                <div class="col-12 mt-4 text-center text-sm">
                    <p>Vous n'avez pas de compte? <a href="{{ route('register') }}" class="text-blue-500">Inscrivez-vous</a></p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
