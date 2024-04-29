
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixydrops.com/linoorhtml/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 23:13:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
	<title>@yield('title')</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Teko:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/linoor-icons-2.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/custom-animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jarallax.css">
    <link href="css/style.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="css/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="css/colors/color-default.css">

    <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- style switcher -->
       
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one header-style-four">
			<!-- Header Upper -->
			<div class="header-upper">
				<div class="inner-container clearfix">
					<!-- Logo -->
					<div class="logo-box">
						<div class="logo">
							<a href="index.html" title="Linoor - DIgital Agency HTML Template">
								<img src="images/logo-dark.png" id="dLogo" class="main-logo" alt="Linoor - DIgital Agency HTML Template" title="Linoor - DIgital Agency HTML Template">
							</a>
						</div>
					</div>
					<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler">
							<span class="icon flaticon-menu-2"></span><span class="txt">Menu</span>
						</div>
		
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md navbar-light">
							<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix one-page-scroll-menu">
									<li class=""><a href="{{Route('dashboard')}}">Accueil</a></li>
									<li class=""><a href="{{Route('voiture.index')}}">Voiture</a></li>
									<li class=""><a href="#about">Paiement</a></li>
									<li class=""><a href="#about">Historique</a></li>
									<li class=""><a href="#about">Facture</a></li>
									<li class=""><a href="#about">Contact</a></li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="other-links clearfix">
                        <!-- cart btn -->
                        <div class="cart-btn">
                            <a href="{{ route('profile.edit') }}" class="theme-btn cart-toggler text-black"><span
                                    class="flaticon-shopping-cart"></span></a>
									
                        </div>
                    <!--Search Btn-->
                      
                        <div class="link-box">
                            <div class="call-us"> 
								<a href="{{ route('profile.edit') }}"><span class="sub-text">{{ Auth::user()->name }}</span></a>  
								
                               
                                 
                                
                            </div>
							<div class="call-us">
								<span>
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<button name="logout" type="submit" class="Btn">
											
											<div class="text">Deconnexion</div>
										</button>
									</form>
								</span>

							</div>
                        </div>
                    </div>

				</div>
		
			</div>
			<!-- End Header Upper -->
		</header>
		
        <!-- End Main Header -->

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
                    
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                
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
	</div>	

	@yield('content')

 <!-- Main Footer -->
 <footer class="main-footer">
	<div class="auto-container">
		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="row clearfix">

				<!--Column-->
				<div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="footer-widget logo-widget">
						<div class="widget-content">
							<div class="logo">
								<a href="index.html"><img id="fLogo" src="images/footer-logo.png" alt="" /></a>
							</div>
							<div class="text">Welcome to our web design agency. Lorem ipsum simply free text
								dolor sited amet cons cing elit.</div>
							<ul class="social-links clearfix">
								<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!--Column-->
				<div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="footer-widget links-widget">
						<div class="widget-content">
							<h6>Explore</h6>
							<div class="row clearfix">
								<div class="col-md-6 col-sm-12">
									<ul>
										<li><a href="#">About</a></li>
										<li><a href="#">Meet Our Team</a></li>
										<li><a href="#">Our Portfolio</a></li>
										<li><a href="#">Latest News</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-12">
									<ul>
										<li><a href="#">Support</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Help</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--Column-->
				<div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="footer-widget info-widget">
						<div class="widget-content">
							<h6>Contact</h6>
							<ul class="contact-info">
								<li class="address"><span class="icon flaticon-pin-1"></span> 66 Broklyn Street,
									New York <br>United States of America</li>
								<li><span class="icon flaticon-call"></span><a href="tel:666888000">666 888
										000</a></li>
								<li><span class="icon flaticon-email-2"></span><a
										href="mailto:needhelp@linoor.com">needhelp@linoor.com</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!--Column-->
				<div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="footer-widget newsletter-widget">
						<div class="widget-content">
							<h6>Newsletter</h6>
							<div class="newsletter-form">
								<form method="post" action="https://pixydrops.com/linoorhtml/contact.html">
									<div class="form-group clearfix">
										<input type="email" name="email" value="" placeholder="Email Address"
											required="">
										<button type="submit" class="theme-btn"><span
												class="fa fa-envelope"></span></button>
									</div>
								</form>
							</div>
							<div class="text">Sign up for our latest news & articles. We won’t give you spam
								mails.</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="inner clearfix">
				<div class="copyright">&copy; Copyright 2022 by Layerdrops.com</div>
			</div>
		</div>
	</div>

</footer>

</div>
<!--End pagewrapper-->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/TweenMax.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/knob.js"></script>
<script src="js/validate.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/jQuery.style.switcher.min.js"></script>
<script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
</script>
<script src="js/jarallax.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/custom-script.js"></script>


<script src="js/lang.js"></script>
<script src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
<script src="js/color-switcher.js"></script>

</body>


<!-- Mirrored from pixydrops.com/linoorhtml/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2024 23:13:14 GMT -->
</html>