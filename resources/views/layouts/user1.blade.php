
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixydrops.com/linoorhtml/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 23:11:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<title>Route Safe</title>
	<!-- Stylesheets -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link
		href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;600;700;800;900&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
		rel="stylesheet">
	<!-- reey font -->
	<link rel="stylesheet" href="css/reey-font.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/owl.css" rel="stylesheet">
	<link href="css/flaticon.css" rel="stylesheet">
	<link href="css/linoor-icons-2.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jarallax.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="css/custom-animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- rtl css -->
	<link href="css/rtl.css" rel="stylesheet">
	<!-- Responsive File -->
	<link href="css/responsive.css" rel="stylesheet">

	<!-- variable update -->
	<link rel="stylesheet" href="css/variables/index-6.css">

	<!-- Color css -->
	<link rel="stylesheet" id="jssDefault" href="css/colors/color-10.css">

	<link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

	<!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    
    <nav class="mainmenu-six main-header">
        <div class="auto-container">
            <div class="mainmenu-six__inner nav-outer">
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
						<ul class="navigation clearfix">
                            <li class="dropdown"><a
                                    href="{{Route('dashboard')}}">Accueil</a>
                               
                            </li>
                            <li class="dropdown">
								<a href="{{ route('statut') }}">Statut</a>
                             
                            </li>
                            <li class="dropdown"><a href="">Historique</a>
                               
                            </li>
                            <li class="dropdown"><a>Paiement</a>
                               
                            </li>
                            <li class="dropdown"><a>Facture</a>
                              
                            </li>
                           
							<li class="dropdown"><a>Notification</a>
                              
                            </li>
                        </ul>
                    </div>
                </nav>

					<div class="mainmenu-six__right">
						@auth
							<a href="{{ route('profile.edit') }}" class="text-truncate" style="font-size: 20px;">
								{{ Auth::user()->name }}
							</a>
						@endauth
					</div>
					
				</div>
			</div>
		</nav>

		<!--Mobile Menu-->
		<div class="side-menu__block">


			<div class="side-menu__block-overlay custom-cursor__overlay">
				<div class="cursor"></div>
				<div class="cursor-follower"></div>
			</div><!-- /.side-menu__block-overlay -->
			<div class="side-menu__block-inner ">
				<div class="side-menu__top justify-content-end">

					<a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png"
							alt=""></a>
				</div><!-- /.side-menu__top -->


				<nav class="mobile-nav__container">
					<!-- content is loading via js -->
				</nav>
				<div class="side-menu__sep"></div><!-- /.side-menu__sep -->
				<div class="side-menu__content">
					<p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
						other agencies.</p>
					<p><a href="mailto:needhelp@linoor.com">needhelp@Route-Safe.com</a> <br> <a href="tel:888-999-0000">888
							999 0000</a></p>
					<div class="side-menu__social">
						<a href="#"><i class="fab fa-facebook-square"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-pinterest-p"></i></a>
					</div>
				</div><!-- /.side-menu__content -->
			</div><!-- /.side-menu__block-inner -->
		</div><!-- /.side-menu__block -->

		<!--Search Popup-->
		<div class="search-popup">
			<div class="search-popup__overlay custom-cursor__overlay">
				<div class="cursor"></div>
				<div class="cursor-follower"></div>
			</div><!-- /.search-popup__overlay -->
			<div class="search-popup__inner">
				<form action="#" class="search-popup__form">
					<input type="text" name="search" placeholder="Type here to Search....">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div><!-- /.search-popup__inner -->
		</div><!-- /.search-popup -->




	@yield('content')


	<section class="footer-six">
		<div class="auto-container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="footer-six__widget footer-six__about">
						<a href="index.html">
							<img src="images/update-01-10-2021/logo route safe.png" width="135" alt="">
						</a>
						<p class="footer-six__about__text">
							Route-safe theme
						</p><!-- /.footer-six__about__text -->
						<div class="footer-six__social">
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div><!-- /.footer-six__social -->
					</div><!-- /.footer-six__widget -->
				</div><!-- /.col-sm-12 col-md-12 col-lg-3 -->
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="footer-six__widget footer-six__links">
						<h3 class="footer-six__title">Explore</h3><!-- /.footer-six__title -->
						<div class="footer-six__links__list">
							<ul class="footer-six__links__list__item">
								<li><a href="#">A propos</a></li>
								<li><a href="#">Contact</a></li>
							</ul><!-- /.footer-six__links__list__item -->
							<ul class="footer-six__links__list__item">
								<li><a href="#">Support</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Conditions</a></li>
								<li><a href="#">Aide</a></li>
							</ul><!-- /.footer-six__links__list__item -->
						</div><!-- /.footer-six__links__list -->
					</div><!-- /.footer-six__widget footer-six__links -->
				</div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
				<div class="col-sm-12 col-md-12 col-lg-5">
					<div class="footer-six__widget footer-six__newsletter">
						<h3 class="footer-six__title">Nouvelles informations</h3><!-- /.footer-six__title -->
						<form action="#" class="footer-six__newsletter__form">
							<input type="text" placeholder="Email address">
							<button type="submit"><i class="fa fa-paper-plane"></i></button>
							<p>Je suis d'accord pour tous<a href="#"> les conditions</a> </p>
						</form><!-- /.footer-six__newsletter__form -->
					</div><!-- /.footer-six__widget footer-six__newsletter -->
				</div><!-- /.col-sm-12 col-md-12 col-lg-5 -->
			</div><!-- /.row -->
		</div><!-- /.auto-container -->
	</section><!-- /.footer-six -->
	<section class="footer-six__copyright">
		<div class="auto-container">
			<p>© Copyright 2024 by Route-Safe.com</p>
		</div><!-- /.auto-container -->
	</section><!-- /.footer-six__copyright -->




	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/TweenMax.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/mixitup.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jQuery.style.switcher.min.js"></script>
	<script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jarallax.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/custom-script.js"></script>
	<script src="js/lang.js"></script>
	<script src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
	<script src="js/color-switcher.js"></script>
</body>


</html>