@extends('layouts._user')

@section('content')

<div class="page-wrapper d-flex align-items-center justify-content-center min-vh-100">

    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="login-wrapper">
        
        <div class="login-content">
            <div class="container">
                <h2 class="text-center text-4xl mb-4">Mot de passe oublié</h2> <!-- Titre "Mot de passe oublié" ajouté ici -->
                <p class="text-center mb-4 text-secondary">Mot de passe oublié? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" class="form-control" :value="old('email')" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="col-12 mt-4 text-center text-sm">
                        <button type="submit" class="btn btn-success btn-lg">Email Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection
