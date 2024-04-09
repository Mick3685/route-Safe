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
                <form  method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" class="block mb-1">Enter Email Address *</label>
                        <input id="email" type="text" name="email" class="w-full">
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block mb-1">Your Password *</label>
                        <input id="password" type="password" name="password" class="w-full">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Forgot Password -->
                    <div class="text-right mt-2">
                        <a href="{{Route('password.request')}}" class="text-blue-500">Forgot your password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="theme-btn btn-style-one mt-6 w-full">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Connexion</span>
                    </button>
                </form>

                <!-- Signup Link -->
                <div class="mt-4 text-center text-sm">
                    <p>Vous n'avez pas de compte? <a href="{{ route('register') }}" class="text-blue-500">Inscrivez-vous</a></p>
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
