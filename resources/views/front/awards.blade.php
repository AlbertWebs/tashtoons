<?php $Awards = DB::table('awards')->limit('3')->inRandomOrder()->get(); ?>	
@if($Awards->isEmpty())

@else

<?php $Banner = DB::table('banners')->where('section','Awards')->get(); ?>
@foreach ($Banner as $banner)
<!-- Portfolio Section -->
	<section id="clients"  class="container mage-bg soft-bg-1 animated" data-animation="fadeIn" data-animation-delay="200" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
		<!-- Portfolio Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald animated" data-animation="fadeInRight" data-animation-delay="200">
				<span id="contents">Awards</span>
			</h1>
			<!-- Header Strip(s) -->
			<div class="header-strips-one"></div>
			<!-- Header Description -->
			
		</div><!-- End Portfolio Inner -->


	</section><!-- End Portfolio Section -->
	{{-- Awards Goes Here --}}
@endforeach
{{--  --}}
<section id="awards" class="client container">
	<div class="inner feature-second-area t-center">
		<div class="container">
			
				<div class="row">	
					<?php $Awards = DB::table('awards')->limit(3)->get(); ?>	
					@foreach ($Awards as $awards)
					<div  class="col-lg-4 col-md-6 col-sm-12 animated award-image" data-animation="fadeIn" data-animation-delay="300">
						<img src="{{url('/')}}/uploads/awards/{{$awards->image}}" />
					</div>
					@endforeach	
				</div>
			
		</div>
	</div>
</section>
@endif
	