
<?php $Banner = DB::table('banners')->where('section','What We Do')->get(); ?>
@foreach ($Banner as $banner)
	<!-- What We Do Section -->
	<section id="what-we-do" class="container soft-bg-1 min-height animated" data-animation="fadeIn" data-animation-delay="200" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
		<?php $About = DB::table('abouts')->get(); ?>
		@foreach ($About as $about)
		<!-- What We Do Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald animated" data-animation="fadeInRight" data-animation-delay="200">
				what we do
			</h1><br><br>
			<!-- Header Strip(s) -->
			{{-- <div class="header-strips-one"></div> --}}
			<!-- Header Description -->
			<h2 class="description white about-text animated" data-animation="fadeInRight" data-animation-delay="400">
				{!! html_entity_decode($about->what_we_do, ENT_QUOTES, 'UTF-8') !!}
			</h2>
		</div><!-- End What We Do Inner -->
		@endforeach
	</section><!-- End What We Do Section -->

	
    @endforeach