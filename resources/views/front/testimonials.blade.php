	<!-- Testimonials -->
	<section id="video" class="testimonials bg1 soft-bg-1 parallax3 t-center">

		<!-- Pattern For Video -->
		<div class="fullscreen soft-bg-1 absolute pattern-black"></div>
		<!-- Video -->
		<div id="P2" class="player video-container" data-property="{videoURL:'XgOov36UzjQ',containment:'#video',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1}"></div>
		<!-- End Video -->

		<!-- Arrow -->
		<a class="t-arrow"></a>

		<!-- Quote -->
		<h1 class="quote white">
			<i class="fa fa-quote-right"></i>
		</h1>

		<!-- Text Slider -->
		<ul class="text-slider clearfix">
            <?php $Testimonials = DB::table('testimonials')->get(); ?>
			@foreach ($Testimonials as $testimonial)
				<!-- Slide -->
			<li class="text normal">
				<!-- Quote -->
				<h1 class="white">
					{!! html_entity_decode($testimonial->content, ENT_QUOTES, 'UTF-8') !!}
				</h1>
				<!-- Author -->
				<p class="author uppercase">
					{{$testimonial->name}}
				</p>
			</li>
			<!-- End Slide -->
			@endforeach
		</ul><!-- End Text Slider -->
	</section><!-- End Testimonials -->
