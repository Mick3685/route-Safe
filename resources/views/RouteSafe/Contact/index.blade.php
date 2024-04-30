@extends('layouts.user1')

@section('title')
Contact
@endsection('title')

@section('content')
 
 
 

 <section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/oko.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contactez-nous</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{Route('dashboard')}}">Accueil</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Nous somme toujours disponible pour vous<span class="dot">.</span></h2>
        </div>

    </div>
    
        <div class="form-box">
            <div class="sec-title">
                <h2>Laissez votre message<span class="dot">.</span></h2>
            </div>
            <div class="default-form">
                <form method="post" action="{{Route('contact.store')}}" method="POST">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text"name="con_name" placeholder="Nom" value="{{ Auth::user()->name }}" placeholder=" Votre Nom" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="con_email" value="{{ Auth::user()->email }}" placeholder="Votre Email "
                                    required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text"  name="con.contact" value="{{ Auth::user()->contact }}" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="con_subject"  placeholder="Sujet" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="message" placeholder="Votre Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button type='submit'class="theme-btn btn-style-one">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Envoyer</span>
                            </button>
                            <div class="form-message">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection