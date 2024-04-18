@extends('layouts.user1')


@section('content')
<section class="slider-six">
    <div class="slider-six__curv">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 122">
            <path fill="currentColor"
                d="M0,122.005S80.814,20.129,283.871,2.426C526.255-18.706,550.388,91.2,792.025,102.115c243.565,11.006,299.815-108,520.765-97.662,220.1,10.3,273.86,88.036,415.09,98.26C1878.57,113.62,1920,51.068,1920,51.068V-862.995H0v985Z" />
        </svg>
    </div><!-- /.slider-six__curv -->
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": { "el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "navigation": { "nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev" }, "autoplay": { "delay": 5000 }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(images/update-01-10-2021/slider/slider-six-1-1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-six__content">
                        <p class="slider-six__text"><span>Welcome to best linoor business agency</span></p>
                        <!-- /.slider-six__text -->
                        <h2 class="slider-six__title">meet the corporate <br> business agency</h2>
                        <!-- /.slider-six__title -->
                        <a href="#" class="slider-six__btn thm-btn__six">Discover More</a>
                        <!-- /.thm-btn__six -->
                    </div><!-- /.slider-six__content -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(images/update-01-10-2021/slider/slider-six-1-2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-six__content">
                        <p class="slider-six__text"><span>Welcome to best linoor business agency</span></p>
                        <!-- /.slider-six__text -->
                        <h2 class="slider-six__title">meet the corporate <br> business agency</h2>
                        <!-- /.slider-six__title -->
                        <a href="#" class="slider-six__btn thm-btn__six">Discover More</a>
                        <!-- /.thm-btn__six -->
                    </div><!-- /.slider-six__content -->
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="slider-bottom-box clearfix">
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span class="fa fa-angle-left"></span>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <span class="fa fa-angle-right"></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="assurance-automobile">
    <div class="auto-container">
        <div class="row">
            <div class="col-md-12 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="assurance-automobile__images">
                    <img src="images/update-01-10-2021/resources/about-seven-1-1.jpg" alt="">
                    <img src="images/update-01-10-2021/resources/about-seven-1-2.jpg" alt="">
                </div><!-- /.assurance-automobile__images -->
            </div><!-- /.col-md-12 col-lg-6 -->
            <div class="col-md-12 col-lg-6">
                <div class="assurance-automobile__content">
                    <div class="sec-title-six text-start">
                        <p class="sec-title-six__text"><span>À Propos de Notre Assurance Automobile</span></p>
                        <!-- /.sec-title-six__text -->
                        <h2 class="sec-title-six__title">Nous offrons les meilleurs services d'assurance automobile</h2>
                        <!-- /.sec-title-six__title -->
                    </div><!-- /.sec-title-six -->
                    <p class="assurance-automobile__summery">Il existe de nombreuses variations de passages du Lorem Ipsum, mais la majorité ont subi une altération sous une forme ou une autre, simplement du texte sans signification injecté.</p><!-- /.assurance-automobile__summery -->
                    <h3 class="assurance-automobile__title">Linoor est le leader en assurance automobile numérique.</h3>
                    <!-- /.assurance-automobile__title -->
                    <ul class="assurance-automobile__list list-unstyled">
                        <li>
                            <i class="flaticon-checked"></i>
                            Nous sommes des designers professionnels et certifiés
                        </li>
                        <li>
                            <i class="flaticon-checked"></i>
                            Nous utilisons des matériaux de qualité pour rendre votre assurance fiable
                        </li>
                        <li>
                            <i class="flaticon-checked"></i>
                            Nous nous soucions de la satisfaction de nos clients
                        </li>
                    </ul><!-- /.assurance-automobile__list list-unstyled -->
                    <a href="about.html" class="assurance-automobile__btn thm-btn__six">En savoir plus</a>
                </div><!-- /.assurance-automobile__content -->
            </div><!-- /.col-md-12 col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section>
<!-- /.about-seven -->

<section class="suivi-voiture">
    <div class="suivi-voiture__curv">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 122">
            <path fill="currentColor"
                d="M0,122.005S80.814,20.129,283.871,2.426C526.255-18.706,550.388,91.2,792.025,102.115c243.565,11.006,299.815-108,520.765-97.662,220.1,10.3,273.86,88.036,415.09,98.26C1878.57,113.62,1920,51.068,1920,51.068V-862.995H0v985Z" />
        </svg>
    </div><!-- /.suivi-voiture__curv -->

    <div class="auto-container">
        <div class="sec-title-six text-center">
            <p class="sec-title-six__text"><span>Suivi de Vos Voitures</span></p>
            <!-- /.sec-title-six__text -->
            <h2 class="sec-title-six__title">Informations sur Vos Voitures</h2>
            <!-- /.sec-title-six__title -->
        </div><!-- /.sec-title-six -->
        <div class="row">
            <!-- Insérez ici vos informations sur vos voitures -->
            <!-- Exemple -->
            <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="suivi-voiture__item">
                    <div class="suivi-voiture__image">
                        <img src="images/update-01-10-2021/cars/car-1.jpg" alt="Voiture 1">
                    </div><!-- /.suivi-voiture__image -->
                    <div class="suivi-voiture__content">
                        <div class="suivi-voiture__icon">
                            <i class="flaticon-car"></i>
                        </div><!-- /.suivi-voiture__icon -->
                        <h3 class="suivi-voiture__title">Voiture 1</h3>
                        <!-- /.suivi-voiture__title -->
                        <div class="suivi-voiture__status">À jour</div>
                        <!-- /.suivi-voiture__status -->
                    </div><!-- /.suivi-voiture__content -->
                </div><!-- /.suivi-voiture__item -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
            <!-- Fin de l'exemple -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section>
<!-- /.service-six -->
