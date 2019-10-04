<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GSHATECH</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="web/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="web/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/css/style.css" rel="stylesheet">
	<link href="web/css/vendors.css" rel="stylesheet">
	<link href="web/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="web/css/custom.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="web/layerslider/css/layerslider.css" rel="stylesheet">


</head>

<body>
	
	<div id="page">
		
	<header class="header menu_2 sticky">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="{{ url('/') }}"><h2 style="color:#fff">GSHATECH</h2></a>
		</div>
		@guest
		<ul id="top_menu">
				<li class="hidden_tablet"><a href="{{ url('/login') }}">Login</a></li>
				<li class="hidden_tablet"><a href="{{ url('/register') }}" class="btn_1 rounded">Registration</a></li>
			</ul>
		@else
		<ul id="top_menu">
			<li class="hidden_tablet"><a href="{{ url('/home') }}" class="btn_1 rounded">Dashboard</a></li>
		</ul>
		@endguest
		
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
                <li><span><a href="{{ url('/') }}">Home</a></span>
				</li>
				<li><span><a href="{{ url('/about') }}">About Us</a></span>
				</li>
				<li><span><a href="{{ url('/consulting') }}">Consulting</a></span>
				</li>
				<li><span><a href="{{ url('/courses') }}">Courses</a></span>
				</li>
				<li><span><a href="{{ url('/') }}">Webinars</a></span>
				</li>
				<li><span><a href="{{ url('/contact') }}">Contact</a></span>
				</li>
			</ul>
		</nav>
		<!-- Search Menu -->

	</header>
    <main>
        @yield('content')
    </main>
	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<h2 style="color:#fff">GSHATECH</h2>
					<p>Gsha Technologies works with the best Consultants to ensure students are equipped with the necessary
							knowledge to enter and succeed in the SAP market and beyond.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="{{ url('/courses') }}">Courses</a></li>
						<li><a href="{{ url('/about') }}">About</a></li>
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
						<li><a href="{{ url('/contact') }}">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 91 9885054740</a></li>
						<li><a href="mailto:info@gshatech.com"><i class="ti-email"></i> info@gshatech.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
							<input type="submit" value="Submit" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2019 Gsha Technologies</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
	
	<!-- SPECIFIC SCRIPTS -->
	
	<script type="text/javascript" src="web/js/mapmarker.jquery.js"></script>
    <script type="text/javascript" src="web/js/mapmarker_func.jquery.js"></script>
    
    <!-- COMMON SCRIPTS -->
    <script src="web/js/jquery-2.2.4.min.js"></script>
    <script src="web/js/common_scripts.js"></script>
    <script src="web/js/main.js"></script>
    <script src="web/assets/validate.js"></script>
    
    <!-- SPECIFIC SCRIPTS -->
    <script src="web/layerslider/js/greensock.js"></script>
    <script src="web/layerslider/js/layerslider.transitions.js"></script>
    <script src="web/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script type="text/javascript">
       
        $('#layerslider').layerSlider({
            autoStart: true,
            navButtons: false,
            navStartStop: false,
            showCircleTimer: false,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1200,
            skinsPath: 'web/layerslider/skins/'
                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
        });
	</script>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5aa170d5d7591465c70864b8/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>