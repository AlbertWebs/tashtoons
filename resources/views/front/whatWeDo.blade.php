
<?php $Banner = DB::table('banners')->where('section','What We Do')->get(); ?>
@foreach ($Banner as $banner)
	<!-- What We Do Section -->
	<section id="what-we-do" class="container soft-bg-1 min-height t-right p-80" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
		<?php $About = DB::table('abouts')->get(); ?>
		@foreach ($About as $about)
		<!-- What We Do Inner -->
		<div class="features">
			<div class="about-overlays animated" data-animation="fadeInLeft" data-animation-delay="800" data-animation-duration="800">
				<img class="what-image" src="{{url('/')}}/uploads/banners/what-we-do.webp" alt="" >
				<br>
				<h2 class="description white what-text">
					{!! html_entity_decode($about->what_we_do, ENT_QUOTES, 'UTF-8') !!}
				</h2>
			</div>
		</div>
		@endforeach
	</section><!-- End What We Do Section -->

	
    @endforeach