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
                    style="background-image: url(images/update-01-10-2021/slider/taxe-fond01.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-six__content">
                        <p class="slider-six__text"><span>BIENVENUE SUR ROUTE - SAFE</span></p>
                        <!-- /.slider-six__text -->
                        <h2 class="slider-six__title">Plateforme de suivie de conformité au paiement des taxes automobiles et de contrôle routier</h2>
                        <!-- /.slider-six__title -->
                        <a href="#" class="slider-six__btn thm-btn__six">En savoir plus</a>
                        <!-- /.thm-btn__six -->
                    </div><!-- /.slider-six__content -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(images/update-01-10-2021/slider/taxe-fond2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="auto-container">
                    <div class="slider-six__content">
                        <p class="slider-six__text"><span>BIENVENUE SUR ROUTE - SAFE</span></p>
                        <!-- /.slider-six__text -->
                        <h2 class="slider-six__title">Plateforme de suivie de conformité au paiement des taxes automobiles et de contrôle routier</h2>
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


<section class="assurance-automobile">
    <div class="auto-container">
        <div class="row">
            <div class="col-md-12 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="assurance-automobile__images">
                    <img src="images/update-01-10-2021/resources/taxe1.jpg" alt="">

                </div><!-- /.assurance-automobile__images -->
            </div><!-- /.col-md-12 col-lg-6 -->
            <div class="col-md-12 col-lg-6">
                <div class="assurance-automobile__content">
                    <div class="sec-title-six text-start">
                        <p class="sec-title-six__text"><span></span></p>
                        <!-- /.sec-title-six__text -->
                        <h2 class="sec-title-six__title">Nous offrons une solution complète pour surveiller et gérer la conformité au paiement des taxes automobiles.</h2>
                        <!-- /.sec-title-six__title -->
                    </div><!-- /.sec-title-six -->
                    <p class="assurance-automobile__summery"> Grâce à nos outils avancés, nous facilitons le suivi des paiements, la gestion des documents et la conformité réglementaire pour les propriétaires de véhicules et les administrations publiques.</p><!-- /.assurance-automobile__summery -->
                </div>
            </div><!-- /.col-md-12 col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->

    <section class="service-six" id="services">
        <div class="service-six__curv">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 122">
                <path fill="currentColor"
                    d="M0,122.005S80.814,20.129,283.871,2.426C526.255-18.706,550.388,91.2,792.025,102.115c243.565,11.006,299.815-108,520.765-97.662,220.1,10.3,273.86,88.036,415.09,98.26C1878.57,113.62,1920,51.068,1920,51.068V-862.995H0v985Z" />
            </svg>
        </div><!-- /.service-six__curv -->
    
        <div class="auto-container">
            <div class="sec-title-six text-center">
                <!-- /.sec-title-six__text -->
                <h2 class="sec-title-six__title"> Actualités </h2>
                <!-- /.sec-title-six__title -->
            </div><!-- /.sec-title-six -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-six__item">
                        <div class="service-six__image">
                            <img src="images/update-01-10-2021/services/assurance-auto.jpg" alt="">
                        </div><!-- /.service-six__image -->
                        <div class="service-six__content">
                            <center><h3 class="service-six__title"> ASSURANCE AUTOMOBILE </h3></center>
                            <!-- /.service-six__title -->
                            <div class="service-six__text">Le Bénin renforce sa réglementation en matière d'assurance automobile pour garantir une meilleure protection aux conducteurs et aux tiers.
                                 Une récente loi exige désormais que tous les véhicules en circulation soient couverts par une assurance responsabilité civile obligatoire.<br><br> 
                                 </div>
                        </div><!-- /.service-six__content -->
                    </div><!-- /.service-six__item -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms"
                    data-wow-delay="300ms">
                    <div class="service-six__item">
                        <div class="service-six__image">
                            <img src="images/update-01-10-2021/services/TVM.jpg" alt="">
                        </div><!-- /.service-six__image -->
                        <div class="service-six__content">
                            <center><h3 class="service-six__title">TVM</h3></center>
                            <!-- /.service-six__title -->
                            <div class="service-six__text"> La Taxe sur les Véhicules à Moteur (TVM) au Bénin est un impôt qui s’applique aux propriétaires de véhicules motorisés. 
                                 L'Etat met en place une réforme de la taxe sur les véhicules à moteur pour encourager une mobilité plus durable.
                                 Cette réforme inclut  l'adoption de  modes de  transport  respectueux de l'environnement dans le pays. <br><br>  </div>
                        </div><!-- /.service-six__content -->
                    </div><!-- /.service-six__item -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="service-six__item">
                        <div class="service-six__image">
                            <img src="images/update-01-10-2021/services/OIP.jpg" alt="">
                        </div><!-- /.service-six__image -->
                        <div class="service-six__content">
                            <center><h3 class="service-six__title">VISITE TECHNIQUE </center></h3>
                            <!-- /.service-six__title -->
                            <div class="service-six__text">Une nouvelle réglementation exige désormais des contrôles techniques périodiques obligatoires
                                 pour tous les véhicules en circulation. Les propriétaires  de  véhicules  sont encouragés à se conformer à cette nouvelle exigence pour 
                                 garantir une conduite plus sûre et respectueuse de l'environnement. <br><br><br>  </div> 
                        </div><!-- /.service-six__content -->
                    </div><!-- /.service-six__item -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
            </div><!-- /.row --> 
            
            <br>
            <br>

<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-six__item">
                        <div class="service-six__image">
                            <img src="images/update-01-10-2021/services/controle-routier-cotonou.jpg" alt="">
                        </div><!-- /.service-six__image -->
                        <div class="service-six__content">
                            <center><h3 class="service-six__title"> CONTROLE ROUTIER </h3></center>
                            <!-- /.service-six__title -->
                            <div class="service-six__text">Les autorités routières intensifient les contrôles routiers pour garantir la sécurité sur les routes.
                                  Les automobilistes sont encouragés à respecter scrupuleusement les règles de circulation et à se conformer aux consignes des forces de l'ordre lors des contrôles,
                                   afin de contribuer à la sécurité de tous les usagers de la route..<br><br><br><br><br><br>
                                 </div>
                        </div><!-- /.service-six__content -->
                    </div><!-- /.service-six__item -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms"
                    data-wow-delay="300ms">
                    <div class="service-six__item">
                        <div class="service-six__image">
                            <img src="images/update-01-10-2021/services/service-1-2.jpg" alt="">
                        </div><!-- /.service-six__image -->
                        <div class="service-six__content">
                            <center><h3 class="service-six__title">FAIRE SA CARTE GRISE EN LIGNE</h3></center>
                            <!-- /.service-six__title -->
                            <div class="service-six__text"> Le processus de demande de carte grise évolue avec l'introduction de nouvelles mesures numériques. 
                                Les gouvernements locaux mettent en place des plateformes en ligne pour faciliter les demandes de cartes grises,
                                 permettant aux propriétaires de véhicules de soumettre leurs demandes et de suivre leur progression en ligne. <br><br><br><br></div>
                        </div><!-- /.service-six__content -->
                    </div><!-- /.service-six__item -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="service-six__item">
                        <div class="service-six__image">
                            <img src="images/update-01-10-2021/services/exces-de-vitesse-a-Cotonou.jpg" alt="">
                        </div><!-- /.service-six__image -->
                        <div class="service-six__content">
                            <center><h3 class="service-six__title">EXCES DE VITESSE SUR LES ROUTES</center></h3>
                            <!-- /.service-six__title -->
                            <div class="service-six__text">La police républicaine du Bénin a intensifié ses efforts pour réprimer l’excès de vitesse sur les routes du pays. 
                                Depuis octobre dernier, elle a lancé des contrôles de la limitation de vitesse afin de réduire les accidents.
                                  Des radars mobiles et des contrôles routier sont déployés de manière proactive pour dissuader les conducteurs de dépasser les limites de vitesse autorisées.
                                  Des mesures punitives strictes sont prises à l'encontre des contrevenants pour prévenir les accidents et assurer la sécurité des usagers de la route.                        </div><!-- /.service-six__content -->
                    </div><!-- /.service-six__item -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
            </div><!-- /.row -->

        </div><!-- /.auto-container -->
     </div>
</section>


@endsection('content')