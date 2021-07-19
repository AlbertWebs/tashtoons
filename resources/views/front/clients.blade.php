<?php $Banner = DB::table('banners')->where('section','Clients')->get(); ?>
@foreach ($Banner as $banner)
<!-- Portfolio Section -->
	<section id="clients"  class="container mage-bg soft-bg-1 animated" data-animation="fadeIn" data-animation-delay="200" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
		<!-- Portfolio Inner -->
		<div class="inner">
			<!-- Header -->
			<div class="features">
				<div class="service-overlays animated" data-animation="fadeIn" data-animation-delay="800">
					<img class="service-image responsive-image" src="{{url('/')}}/uploads/banners/clients.webp" alt="" >
					<br>
				</div>
			</div>
			<!-- Header Strip(s) -->
			<div class="header-strips-one"></div>
			<!-- Header Description -->
			
		</div><!-- End Portfolio Inner -->


	</section><!-- End Portfolio Section -->
@endforeach
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