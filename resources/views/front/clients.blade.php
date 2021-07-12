	<!-- Portfolio Section -->
	<section id="clients"  class="container mage-bg soft-bg-1 animated" data-animation="fadeIn" data-animation-delay="200">
		<!-- Portfolio Inner -->
		<div class="inner">
			<!-- Header -->
			<h1 class="header about-header white uppercase dark oswald animated" data-animation="fadeInRight" data-animation-delay="200">
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
						<?php $Clients = DB::table('clients')->get(); ?>
						@foreach ($Clients as $item)
						<div class="slide"><img src="{{url('/')}}/uploads/clients/{{$item->image}}"></div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>