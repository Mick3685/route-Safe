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
                    style="background-image: url(images/update-01-10-2021/slider/ctr.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-six__content">
                        <p class="slider-six__text"><span>BIENVENUE SUR ROUTE - SAFE</span></p>
                        <!-- /.slider-six__text -->
                        <h2 class="slider-six__title">Contrôle de conformité</h2>
                        <!-- /.slider-six__title -->
                        <a href="#" class="slider-six__btn thm-btn__six">En savoir plus</a>
                        <!-- /.thm-btn__six -->
                    </div><!-- /.slider-six__content -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(images/update-01-10-2021/slider/ctr1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-six__content">
                        <p class="slider-six__text"><span>BIENVENUE SUR ROUTE - SAFE</span></p>
                        <!-- /.slider-six__text -->
                        <h2 class="slider-six__title"> Contrôler votre conformité</h2>
                        <!-- /.slider-six__title -->
                        <a href="#" class="slider-six__btn thm-btn__six">En savoir plus</a>
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

<br><br>
<center><h3 class="sec-title-six__title" style="text-align: justify; width: 80%; margin-left:10px; margin-right:10px" >Le numéro d'immatriculation de votre automobile vous permettra 
    d'avoir des informations essentielles sur son assurance, sa coformité au paiement des taxes, ses visites techniques et plus... </h3></center>
<br>
<br>
<section class="assurance-automobile">
    <div class="auto-container">
        <div class="statut-box">
            <h4>Entrez votre n° d'immatriculation</h4>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Example: XX 0000 RB">
                <button class="btn btn-primary">Contrôler</button>
            </div>
        </div>
    </div><!--/.auto-container -->
    <br>
    <br>
    <center>
        <div>
             <ol>
                <li>Nom du propriétaire du véhicule.</li>
                <li>Date de mise en circulation</li>
                <li>Marque et modèle</li>
                <li>Vous saurez si le véhicule a été bien entretenu pendant ses visites techniques.</li>
                <li>Vérifiez si votre véhicule est à jour pour le paiement de la TVM.</li>
             </ol>
         </div>
    </center>
    <br>
    <button href="{{ route('ajoutautomobile') }}">Jouter une automobile</button>
</section>
   <br><br>
   <br><br>


