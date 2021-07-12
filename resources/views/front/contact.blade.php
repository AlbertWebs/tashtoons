	<?php $SiteSettings = DB::table('site_settings')->get(); ?>
	@foreach ($SiteSettings as $Settings)
	<!-- Keep In Touch -->
	<section id="contact" class="container">

		<!-- Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald animated" data-animation="fadeInRight" data-animation-delay="200">
				keep in touch
			</h1>
			<!-- Header Strip(s) -->
			<div class="header-strips-one"></div>
			<!-- Header Description -->
		
			<!-- Contact -->
			<div class="contact animated" data-animation="fadeIn" data-animation-delay="200">
				<!-- Contact Form -->
				<form id="contact-fosrm" name="cform" class="clearfix" method="post" action="{{ route('contact.store') }}">
					@csrf
					<!-- Left Inputs -->
					<div class="col-xs-6 left">

						<!-- Name -->
						<span class="name-missing">Please enter your name</span>
						<input type="text" name="name" id="name" class="form dark-form oswald light" placeholder="NAME" />
						<!-- Error -->
						@if ($errors->has('name'))
						<div class="error">
							{{ $errors->first('name') }}
						</div>
						@endif

						<!-- Email -->
						<span class="email-missing">Please enter your E-mail</span>
						<input type="text" name="email" id="email" class="form dark-form oswald light" placeholder="E-MAIL" />
						@if ($errors->has('email'))
						<div class="error">
							{{ $errors->first('email') }}
						</div>
						@endif

						<!-- Subject -->
						<span class="subject-missing">Please enter Subject</span>
						<input type="text" name="subject" id="subject" class="form dark-form oswald light" placeholder="SUBJECT" />
						@if ($errors->has('subject'))
						<div class="error">
							{{ $errors->first('subject') }}
						</div>
						@endif

					</div>
					<!-- End Left Inputs -->
					<!-- Right Text Area -->
					<div class="col-xs-6 right">
						<!-- Name -->
						<span class="name-missing">Please enter your phone number</span>
						<input type="text" name="phone" id="name" class="form dark-form oswald light" placeholder="Phone Number" />
						@if ($errors->has('phone'))
						<div class="error">
							{{ $errors->first('phone') }}
						</div>
						@endif


						<!-- Message -->
						<span class="message-missing">Please enter your Message</span>
						<textarea name="message" id="message" class="form dark-form textarea oswald light" placeholder="YOUR MESSAGE"></textarea>
						@if ($errors->has('message'))
						<div class="error">
							{{ $errors->first('message') }}
						</div>
						@endif

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
                <h1 class="phone-text oswald white animated" data-animation="fadeIn" data-animation-delay="200">
                    {{$Settings->mobile_one}}
                </h1>

                <!-- Address -->
                <h2 class="phone-text oswald uppercase animated" data-animation="fadeIn" data-animation-delay="400">
                    {{$Settings->location}}
                </h2>

                <!-- E-Mail -->
                <a href="mailto:{{$Settings->email}}" class="mail-text uppercase oswald animated" data-animation="fadeInRight" data-animation-delay="600">
                    {{$Settings->email}}
                </a>

                <!-- Social, Facebook -->
                <a href="{{$Settings->facebook}}" target="_blank" class="social round dark-bg facebook animated" data-animation="fadeIn" data-animation-delay="200">
                    <i class="fa fa-facebook"></i>
                </a>

                <!-- Twitter -->
                <a href="{{$Settings->twitter}}" target="_blank" class="social round dark-bg twitter animated" data-animation="fadeIn" data-animation-delay="200">
                    <i class="fa fa-twitter"></i>
                </a>

                <!-- Linkedin -->
                <a href="{{$Settings->linkedin}}" target="_blank" class="social round dark-bg linkedin animated" data-animation="fadeIn" data-animation-delay="200">
                    <i class="fa fa-linkedin"></i>
                </a>

                <!-- YouTube -->
                <a href="{{$Settings->youtube}}" target="_blank" class="social round dark-bg youtube animated" data-animation="fadeIn" data-animation-delay="200">
                    <i class="fa fa-youtube"></i>
                </a>

            </div><!-- End Address Soft Area -->
        </div><!-- End Inner -->
    </section><!-- End Address Section -->
  
    	<!-- Google Map -->
	<section id="map">
		<iframe src="{{$Settings->map}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>
	<!-- End Google Map -->

	@endforeach