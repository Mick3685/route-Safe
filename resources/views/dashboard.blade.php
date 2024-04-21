@extends('layouts.user1')

@section('title')
Acceuil
@endsection
@section('content')

@section('content')


<section class="banner-section banner-one banner-one-page" id="home">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(images/update-01-10-2021/slider/taxe-fond01.jpg);"></div>

            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner text-center">
                            <h1>BIENVENUE<br> <span> SUR ROUTE - SAF</span></h1>
                            <div class="sub-ti+tle">Suivie de conformité au paiement des taxes automobiles et de contrôle routier</div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(images/main-slider/2-2.jpg);"></div>

            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner text-center">
                            <div class="sub-title">welcome to Linoor agency</div>
                            <h1>Discover <br> <span>new linoor agency</span></h1>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                        class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i
                                                class="ripple"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection('content')