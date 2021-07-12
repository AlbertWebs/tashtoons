<?php $Awards = DB::table('awards')->limit('3')->inRandomOrder()->get(); ?>	
@if($Awards->isEmpty())

@else
<!-- Portfolio Section -->
	<section id="clients"  class="container mage-bg soft-bg-1 animated" data-animation="fadeIn" data-animation-delay="200">
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
</section><!-- End Portfolio Section -->
{{--  --}}
<section id="awards" class="client container">
	<div class="inner feature-second-area t-center">
		<div class="container">
			
				<div class="row">	
					<?php $Awards = DB::table('awards')->get(); ?>	
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
	