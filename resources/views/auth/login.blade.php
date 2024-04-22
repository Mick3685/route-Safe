@extends('layouts._user')
@section('title')
Connexion
@endsection
@section('content')

@section('content')



<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader">
        <div class="icon"></div>
    </div>

    <section class="login-wrapper">
        <div class="login-bg" style="background-image: url(images/update-1-12-2020/background/login-bg.jpg);"></div>
        <!-- /.login-bg -->
        <div class="login-content">
            <div class="login-content__inner">
                <div class="logo-box">
                    <h2 class="text-center text-4xl mb-8">Connectez-vous</h2>
                
                </div>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-1">Adresse Email *</label>
                        <input id="email" type="email" name="email" class="w-full" required>
                        <p class="text-red-500 error-message" id="email-error"></p>
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                   <div>
                    <label for="password" class="block mb-1">Mot de passe *</label>
                    <input id="password" type="password" name="password" class="w-full" required>
                    <p class="text-red-500 error-message" id="password-error"></p>
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                   </div>
                    <p class="text-right"><a href="{{ route('password.request') }}">Mot de passe oublié?</a></p>
                    <button type='submit' class="theme-btn btn-style-one">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Connexion</span>
                    </button>
                </form>
                <p class="signup-link">Vous êtes nouveau? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
                <p class="copyright-text">© Copyright 2024 by Mick</p><!-- /.copyright-text -->
            </div><!-- /.login-content__inner -->
        </div><!-- /.login-content -->
    </section><!-- /.login-wrapper -->

</div>
<!--End pagewrapper-->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection
