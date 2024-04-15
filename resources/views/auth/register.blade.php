@extends('layouts._user')

@section('content')

<div class="page-wrapper">

    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="login-wrapper">
        
        <div class="login-content">
            <div class="container">
                <h1 class="text-center text-4xl mb-8">Inscrivez-vous</h1> 

                <form method="POST" action="{{ route('register') }}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="block mb-1">Nom</label>
                        <input id="name" type="text" name="name" class="w-full" required>
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="block mb-1">Adresse Email *</label>
                        <input id="email" type="email" name="email" class="w-full" required>
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="contact" class="block mb-1">Contact</label>
                        <input id="contact" type="text" name="contact" class="w-full" required>
                        <!-- Note: Assuming contact is a text field, adjust input type if needed -->
                        @error('contact')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="adresse" class="block mb-1">Adresse</label>
                        <input id="adresse" type="text" name="adresse" class="w-full">
                        @error('adresse')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="automobile" class="block mb-1">Automobile</label>
                        <input id="automobile" type="text" name="automobile" class="w-full">
                        @error('automobile')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="profession" class="block mb-1">Profession</label>
                        <input id="profession" type="text" name="profession" class="w-full">
                        @error('profession')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="npi" class="block mb-1">NPI</label>
                        <input id="npi" type="text" name="npi" class="w-full">
                        <!-- Note: Assuming NPI is a text field, adjust input type if needed -->
                        @error('npi')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="ifu" class="block mb-1">IFU</label>
                        <input id="ifu" type="text" name="ifu" class="w-full">
                        <!-- Note: Assuming IFU is a text field, adjust input type if needed -->
                        @error('ifu')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="block mb-1">Mot de passe *</label>
                        <input id="password" type="password" name="password" class="w-full">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirmation" class="block mb-1">Confirmer le mot de passe *</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="w-full">
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12">
                        <button type="submit" class="theme-btn btn-style-one mt-6 w-full">
                            <i class="btn-curve"></i>
                            <span class="btn-title">S'inscrire</span>
                        </button>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="col-12 mt-4 text-center text-sm">
                    <p>Déjà un compte? <a href="{{ route('login') }}" class="text-blue-500">Connectez-vous</a></p>
                </div>
                <!-- Copyright -->
                <div class="col-12 mt-8 text-center">
                    <p class="text-gray-500">© Copyright 2024</p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
