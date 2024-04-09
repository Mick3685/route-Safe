@extends('layouts._user')

@section('content')

<div class="page-wrapper">

    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="login-wrapper">
        <div class="login-bg" style="background-image: url(images/update-1-12-2020/background/login-bg.jpg);"></div>
        <div class="login-content">
            <div class="login-content__inner">
                <div class="logo-box">
                    <div class="logo text-center">
                        <h3 class="text-2xl font-bold">Route-SAFE</h3>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mt-4">
                        <label for="name" class="block mb-1">Nom</label>
                        <input id="name" type="text" name="name" class="w-full">
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" class="block mb-1">Adresse Email *</label>
                        <input id="email" type="email" name="email" class="w-full">
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block mb-1">Mot de passe *</label>
                        <input id="password" type="password" name="password" class="w-full">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="block mb-1">Confirmer le mot de passe *</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="w-full">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="theme-btn btn-style-one mt-6 w-full">
                        <i class="btn-curve"></i>
                        <span class="btn-title">S'inscrire</span>
                    </button>
                </form>

                <!-- Login Link -->
                <div class="mt-4 text-center text-sm">
                    <p>Déjà un compte? <a href="{{ route('login') }}" class="text-blue-500">Connectez-vous</a></p>
                </div>
                <!-- Copyright -->
                <div class="mt-8 text-center">
                    <p class="text-gray-500">© Copyright 2024</p>
                </div>
                
            </div>
        </div>
    </section>

</div>


@endsection
