<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php $SiteSettings = DB::table('site_settings')->get(); ?>
@foreach($SiteSettings as $Settings)
<head>

    <meta charset="utf-8" />
    <title>TV and Film Production | Level Five Productions | Nairobi</title>
	 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="description" content="Audio Visual Productions Company | Level Five Productions | Nairobi"/>
	<link rel="canonical" href="https://levelfiveproductions.com"/>
	{{-- OG --}}
	<meta property="og:title" content="TV and Film Production | Level Five Productions | Nairobi"/>
	<meta property="og:description" content="Audio Visual | Level Five Productions | Nairobi"/>
	<meta property="og:image" content=""/>
	<meta property="og:image:width" content="629"/>
	<meta property="og:image:height" content="617"/>
	<meta property="og:url" content="https://levelfiveproductions.com"/>
	<meta property="og:site_name" content="levelfiveproductions"/>
	<meta property="og:type" content="website"/>
	<meta name="fb_admins_meta_tag" content="#"/>
	<meta property="fb:admins" content="#"/>
	{{-- OG --}}
	{{-- Google Verification --}}
	<meta name="google-site-verification" content=""/>
	{{-- G-Verify --}}

	{{-- Twitter Tags --}}
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:title" content="TV and Film Production | Level Five Productions | Nairobi"/>
	<meta name="twitter:description" content="Audio Visual | Level Five Productions | Nairobi"/>
	<meta name="twitter:image" content=""/>
	{{-- Twitter Tags --}}


    <!--Favicon -->
	@include('favicon')
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('theme/css/reset.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/animate.min.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}" async />
	<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/socials.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/player/YTPlayer.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('theme/css/prettyPhoto.css')}}" />
	<!-- Page Styles -->
	<link rel="stylesheet" href="{{asset('theme/css/style.css')}}" async />
	<link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}" />
	<!-- End Page Styles -->
	<!-- Page Layout Color, night or dark -->
	<link id="changeable_tone" rel="stylesheet" href="{{asset('theme/css/dark.css')}}" />
	<!-- End Page Layout Color -->
	<!-- Page Elements Color -->
	<link id="changeable_color" rel="stylesheet" href="{{asset('theme/css/colors/red.css')}}" />
	<!-- End Page Elements Color -->
	<!-- Theme Panel -->
	<link rel="stylesheet" href="{{asset('theme/theme_panel/theme_panel.css')}}" />
	<!-- End Theme Panel -->
	<!-- End CSS Files -->
</head>

<body class="dark-layout parallax">


	<!-- Page Loader -->
	<section id="pageloader">
		<div class="outter colored-border">
			<div class="mid colored-border"></div>
		</div>
	</section>



	<!-- Navigation -->
	<nav id="navigation" class="first-nav dark-nav">
		<!-- Navigation Inner -->
		<div class="nav-inner">
			<div class="logo">
				<!-- Navigation Logo Link -->
				<a href="#home" class="scroll">
					<!-- Your Logo -->
					<img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" class="{{$Settings->sitename}}" alt=""/>
				</a>
			</div>
			<!-- Mobile Menu Button -->
			<a class="mobile-nav-button colored"><i class="fa fa-bars"></i></a>
			<!-- Navigation Menu -->
			<div class="nav-menu clearfix semibold">
				<ul class="nav uppercase oswald">
					<li><a href="#home" class="scroll">home</a></li>
					<li class="dropdown-toggle nav-toggle" ><a href="#features" class="scroll">about</a>
						
					</li>
					<li><a href="#what-we-do" class="scroll">What We Do</a></li>
					<li><a href="#servicess" class="scroll">services</a></li>
					<li><a href="#showreel" class="scroll">Showreel</a></li>
					<li><a href="#portfolio" class="scroll">Gallery</a></li>
					<li><a href="#clients" class="scroll">Clients</a></li>
					{{-- <li><a href="#awards" class="scroll">Awards</a></li> --}}
					
					<li><a href="#contact" class="scroll">contact</a></li>
				</ul>
			</div><!-- End Navigation Menu -->
		</div><!-- End Navigation Inner -->
	</nav><!-- End Navigation -->



    @yield('content')




	<!-- Footer -->
	<footer class="footer dark-footer t-center">
		<!-- Logo -->
		<img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt=""/>
		<!-- Text -->
		<p class="uppercase semibold">
			© <?php echo date('Y') ?> all right reserved | Powered by <a href="https://designekta.com" target="_blank">Tashtoons</a> 
		</p>
	</footer>
	<!-- End Footer -->




	<!-- Back To Top Button -->
	<section id="back-top">
		<a href="#home" class="scroll t-center white">
			<i class="fa fa-angle-double-up"></i>
		</a>
	</section>
	<!-- End Back To Top Button -->





	<!-- JS Files -->
	<script type="text/javascript" src="{{asset('theme/js/jquery-1.11.0.min.js')}}"></script>
	<script>
		// A $( document ).ready() block.
		$( document ).ready(function() {
			$('.extra-showreel').hide();
			$("#reveal").click(function(){
				$('.extra-showreel').show();
			});
		});
	</script>
	<script type="text/javascript" src="{{asset('theme/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.appear.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/waypoints.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/modernizr-latest.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/SmoothScroll.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.superslides.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.isotope.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.parallax-1.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.fitvids.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.mb.YTPlayer.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/jquery.prettyPhoto.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{asset('theme/js/google-map.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js" integrity="sha512-p55Bpm5gf7tvTsmkwyszUe4oVMwxJMoff7Jq3J/oHaBk+tNQvDKNz9/gLxn9vyCjgd6SAoqLnL13fnuZzCYAUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Theme Panel -->
	<script type="text/javascript" src="{{asset('theme/theme_panel/theme_panel.js')}}"></script>
	<!-- End JS Files -->
	<script>
		/**********************/
		/*	Client carousel   */
		/**********************/
		$('.carousel-client').bxSlider({
			auto: true,
			slideWidth: 234,
			minSlides: 2,
			maxSlides: 8,
			controls: false
		});

	</script>



</body>
@endforeach
</html>