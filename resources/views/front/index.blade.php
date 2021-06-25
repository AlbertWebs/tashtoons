@extends('front.master')
@section('content')
	<!-- Home -->
	<section id="home" class="container relative pattern-black">

		<div class="fullscreen soft-bg-1 absolute z-1 pattern-black"></div>

		<!-- Ful Screen Home -->
		<div id="fullscreen" class="image-bg">

			<!-- Video -->
			<div id="P10" class="player video-container p-video-v" data-property="{videoURL:'yk7easdY2sMa',containment:'#fullscreen',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1}"></div>
			<!-- End Video -->

			<!-- Home Elements v2 -->
			<div class="home-elements">
				<!-- Home Inner -->
				<div class="home-inner v2 t-left">
					
					<!-- Home Text Slider -->
					<div class="home-text-slider relative">
						<div class="text-slider clearfix">
							<!-- Home Text Slides -->
							<ul class="home-texts clearfix t-left semibold">
								<li class="slide white uppercase">We are in Film</li>
								<li class="slide white uppercase">We are in Production</li>
								<li class="slide white uppercase">We are in Animation</li>
							</ul>
							<!-- End Home Text Slides -->
							<!-- Home Fixed Text -->
							<h1 class="home-fixed-text t-left">XYZ Productions is an audiovisual production company founded in February 2004. For over 17 years we have been involved in the production of Television, Radio, Documentary, online branded content, 2D & 3D Animation commercials.</h1> 
							{{-- call to action --}}
							<h3 class="">
								{{-- <br><br> --}}
								<a href="#showreel" class="home-btn uppercase scroll">
									Watch Showreel <i class="fa fa-video-camera"></i>
								</a>
							</h3>
						</div>
					</div>
					<!-- End Home Text Slider -->

					
				</div><!-- End Home Inner -->
			</div><!-- End Home Elements -->
		</div>
		<!-- End Ful Screen Home -->
	</section><!-- End Home Section -->

	<section id="features" class="big-reserve container about-section animated" data-animation="fadeIn" data-animation-delay="200">

		<!-- Features Background -->
		<div class="features-background parallax1 soft-bg-1" style="background-position: 50% 50%;"></div>

		<!-- Features Inner -->
		<div class="inner features">
			<!-- Header -->
			<h1  class="white header uppercase about-header">
				<span id="contents">About Us</span>
			</h1><br>
			<!-- Header Strip(s) -->
			{{-- <div class="header-strips-one t-right" ></div> --}}
			<!-- Header Description -->
			<h2 class="description white about-text">
				Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in piece of classical. There are many variations of passages of Lorem Ipsum available.<br><br>
				Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in piece of classical. There are many variations of passages of Lorem Ipsum available.
			</h2>
			
		</div>
		<!-- End Features Inner -->
	</section>

	<!-- What We Do Section -->
	<section id="what-we-do" class="container soft-bg-1 animated" data-animation="fadeIn" data-animation-delay="200">
		<!-- What We Do Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald">
				what we do
			</h1><br><br>
			<!-- Header Strip(s) -->
			{{-- <div class="header-strips-one"></div> --}}
			<!-- Header Description -->
			<h2 class="description white about-text">
				Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in piece of classical. There are many variations of passages of Lorem Ipsum available.
			</h2>
		</div><!-- End What We Do Inner -->
	</section><!-- End What We Do Section -->

	<!-- What We Do Section -->
	<section id="servicess" class="container soft-bg-1 parallax animated" data-animation="fadeIn" data-animation-delay="200">
		<!-- What We Do Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald">
				Our Services
			</h1><br><br>
			<!-- Header Strip(s) -->
			{{-- <div class="header-strips-one"></div> --}}
		
		</div><!-- End What We Do Inner -->
	</section><!-- End What We Do Section -->


	<!-- Featured Works -->
	<section id="featured-works" class="container soft-bg-1">

		<!-- Inner -->
		<div class="inner fullwidth">
			<!-- Second Area -->
			<div class="inner feature-second-area t-center">

				{{-- Services Goes Here --}}
				<div class="container">
                    <div class="row">

						<div class="row margindiv">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>TV Commercials & Documentaries</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Radio</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row margindiv">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Photography</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Editing</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row margindiv">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Edits & Audio Suites</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Source Connect</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row margindiv">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Cameras</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Sound Equipments</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row margindiv">
							
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Steadicam</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeIn" data-animation-delay="300">
								<div class="containerss">
									<img src="{{asset('/theme/images/b-slide1.jpg')}}" alt="Avatar" class="imagess">
									<div class="overlayss">
									<h1>Source Connect</h1>
									<div class="textss">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</div>
									</div>
								</div>
							</div>
						</div>

						


					</div>
				  </div>
				{{-- Services Goes Here --}}

				<!-- Button -->
				<a href="#showreel" class="feature-button scroll">
					<h3 class="uppercase oswald">Watch Showreel</h3>
					<p class="semibold">click to watch our showreel</p>
				</a>

				<!-- Button -->
				<a href="#contact" class="feature-button scroll">
					<h3 class="uppercase oswald">keep in touch</h3>
					<p class="semibold">send us a message</p>
				</a>

			</div>
		</div>
	</section>



	<section id="showreel" class="watch-our-video m_slide1 t-center">

		<a href="https://www.youtube.com/watch?v=XcFIluYkCS4" class="video-link mp-video">
			<i class="fa fa-play fa-2x round"></i>
			<h3 class="">
				Watch Showreel
			</h3>
		</a>

	</section>



	<section id="portfolio" class="container">
		
		<!-- Portfolio Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald">
				<span id="contents">Gallery</span>
			</h1>
			<!-- Header Strip(s) -->
			<div class="header-strips-one"></div>
			<!-- Header Description -->
			
		</div><!-- End Portfolio Inner -->
		<div class="portfolio t-center fullwidth relative">

			

			<!-- Portfolio Items -->
			<div class="portfolio-items t-center isotope" style="position: relative; overflow: hidden; height: 744px;">

				<!-- Item -->
				<div class="item five branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
					<!-- Item Link -->
					<a href="{{asset('theme/images/project/02.jpg')}}" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/001.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								Red &amp; Dark
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								branding
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(317px, 0px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/002.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								eagle
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								video, photography
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five design branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(634px, 0px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/003.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								big bang
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								design, branding
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five design photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(951px, 0px, 0px);">
					<!-- Item Link -->
					<a href="http://vimeo.com/71319358" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/004.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								street
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								design, photography
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1268px, 0px, 0px);">
					<!-- Item Link -->
					<a href="images/portfolio/005b.jpg')}}" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/005.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								tennis
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								video, branding
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five photography design isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 248px, 0px);">
					<!-- Item Link -->
					<a href="{{asset('theme/images/project/03.jpg')}}" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/006.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								red dress
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								photography, design
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five design photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(317px, 248px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/007.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								perspective
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								design, photography
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five branding video isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(634px, 248px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/008.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								dance
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								branding, video
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five photography branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(951px, 248px, 0px);">
					<!-- Item Link -->
					<a href="http://www.youtube.com/watch?v=mSLAF_DjiDU" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/009.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								in pieces
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								branding, photography
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1268px, 248px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/010.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								balloons
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								photography, design
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video design isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 496px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/011.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								dancing
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								design, video
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video design isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(317px, 496px, 0px);">
					<!-- Item Link -->
					<a href="images/portfolio/012b.jpg')}}" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/012.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								forest
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								video, design
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(634px, 496px, 0px);">
					<!-- Item Link -->
					<a href="images/portfolio/013.jpg')}}" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/013.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								dawn
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								video, photography
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five video design isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(951px, 496px, 0px);">
					<!-- Item Link -->
					<a href="#" class="work-image ex-link">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/014.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								northern
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								video
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->


				<!-- Item -->
				<div class="item five branding photography isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1268px, 496px, 0px);">
					<!-- Item Link -->
					<a href="images/portfolio/015b.jpg')}}" data-rel="prettyPhoto[portfolio]" class="work-image">
						<!-- Item Image -->
						<img src="{{asset('theme/images/portfolio/015.jpg')}}" alt="">
						<!-- Item Details -->
						<div class="item-details">
							<!-- Item Header -->
							<h1 class="oswald uppercase white">
								red paint
							</h1>
							<!-- Item Strips -->
							<span class="portfolio-strips"></span>
							<!-- Item Description -->
							<p class="oswald uppercase">
								branding, photography
							</p>
						</div>
						<!-- End Item Details -->
					</a>
					<!-- End Item Link -->
				</div>
				<!-- End Item -->

				
			</div><!-- End Portfolio Items -->
		</div><!-- End Portfolio -->
	</section>

	{{--  --}}



	<!-- Portfolio Section -->
	<section id="clients"  class="container mage-bg soft-bg-1 animated" data-animation="fadeIn" data-animation-delay="200">
		<!-- Portfolio Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald">
				<span id="contents">Clients</span>
			</h1>
			<!-- Header Strip(s) -->
			<div class="header-strips-one"></div>
			<!-- Header Description -->
			
		</div><!-- End Portfolio Inner -->


	</section><!-- End Portfolio Section -->
	{{--  --}}
	<section class="client">
		<div class="container">
			<div class="inner remove-padding">
				<div class="row">			
					<div class="carousel-client">
						<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo1.png"></div>
						<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
						<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
						<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo1.png"></div>
						<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo2.png"></div>
						<div class="slide"><img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/slider-logo3.png"></div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Keep In Touch -->
	<section id="contact" class="container">

		<!-- Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald">
				keep in touch
			</h1>
			<!-- Header Strip(s) -->
			<div class="header-strips-one"></div>
			<!-- Header Description -->
		
			<!-- Contact -->
			<div class="contact animated" data-animation="fadeIn" data-animation-delay="200">
				<!-- Contact Form -->
				<form id="contact-form" name="cform" class="clearfix" method="post" action="#">
					<!-- Left Inputs -->
					<div class="col-xs-6 left">

						<!-- Name -->
						<span class="name-missing">Please enter your name</span>
						<input type="text" name="name" id="name" class="form dark-form oswald light" placeholder="NAME" />

						<!-- Email -->
						<span class="email-missing">Please enter your E-mail</span>
						<input type="text" name="email" id="email" class="form dark-form oswald light" placeholder="E-MAIL" />

						<!-- Subject -->
						<span class="subject-missing">Please enter Subject</span>
						<input type="text" name="subject" id="subject" class="form dark-form oswald light" placeholder="SUBJECT" />

					</div>
					<!-- End Left Inputs -->
					<!-- Right Text Area -->
					<div class="col-xs-6 right">

						<!-- Message -->
						<span class="message-missing">Please enter your Message</span>
						<textarea name="message" id="message" class="form dark-form textarea oswald light" placeholder="YOUR MESSAGE"></textarea>

					</div>
					<!-- End Right Text Area -->
					<!-- Send Button -->
					<div class="col-xs-12">
						<!-- Button -->
						<button type="submit" id="submit" name="submit" class="form contact-form-button dark-form oswald light">SEND EMAIL</button>
					</div>
					<!-- End Send Button -->
				</form>
				<!-- End Form -->

				<!-- Your Mail Message -->
				<div class="mail-message-area">
					<!-- Message -->
					<div class="alert dark-form mail-message not-visible-message">
						<strong>Thank You !</strong> Your email has been delivered.
					</div>
				</div>
				<!-- End Mail Message -->
			</div><!-- End Contact Form -->
		</div><!-- End Inner -->
	</section><!-- End Contact Section -->




	<!-- Adress Section -->
	<section id="address" class="container soft-bg-1 parallax7">
		<!-- Inner -->
		<div class="inner">
			<!-- Address Soft Area -->
			<div class="address-soft t-center">

				<!-- Top Phone Button -->
				<a href="tel:254720000000" class="phone-button round white">
					<i class="fa fa-phone"></i>
				</a>

				<!-- Phone -->
				<h1 class="phone-text oswald white">
					+254720000000
				</h1>

				<!-- Address -->
				<h2 class="phone-text oswald uppercase">
					Westlands, Street Name 6209, Nairobi Kenya
				</h2>

				<!-- E-Mail -->
				<a href="mailto:support@goldeyestheme.com" class="mail-text uppercase oswald">
					support@tashtoons.com
				</a>

				<!-- Social, Facebook -->
				<a href="#" target="_blank" class="social round dark-bg facebook">
					<i class="fa fa-facebook"></i>
				</a>

				<!-- Twitter -->
				<a href="#" target="_blank" class="social round dark-bg twitter">
					<i class="fa fa-twitter"></i>
				</a>

				<!-- Linkedin -->
				<a href="#" target="_blank" class="social round dark-bg linkedin">
					<i class="fa fa-linkedin"></i>
				</a>

				<!-- YouTube -->
				<a href="#" target="_blank" class="social round dark-bg youtube">
					<i class="fa fa-youtube"></i>
				</a>

			</div><!-- End Address Soft Area -->
		</div><!-- End Inner -->
	</section><!-- End Address Section -->

	


	<!-- Google Map -->
	<section id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1624263503497!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>
	<!-- End Google Map -->
    @endsection