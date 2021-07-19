<?php $Banner = DB::table('banners')->where('section','Gallery')->get(); ?>
@foreach ($Banner as $banner)
<section id="portfolio" class="container soft-bg-1" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
		
    <!-- Portfolio Inner -->
    <div class="inner">
        <!-- Header -->
        <div class="features">
            <div class="service-overlays animated" data-animation="fadeIn" data-animation-delay="800">
                <img class="service-image responsive-image" src="{{url('/')}}/uploads/banners/gallery.webp" alt="" >
                <br>
            </div>
        </div>
        <!-- Header Strip(s) -->
        <div class="header-strips-one"></div>
        <!-- Header Description -->
        
    </div><!-- End Portfolio Inner -->
    <div class="portfolio t-center fullwidth relative">

        

        <!-- Portfolio Items -->
        <div class="portfolio-items t-center isotope" style="position: relative; overflow: hidden; height: 744px;">

            <?php $Gallery = DB::table('galleries')->inRandomOrder()->limit('10')->get(); ?>
            @foreach($Gallery as $Gallery)
            <!-- Item -->
            <div class="item five branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                
                <!-- Item Link -->
                <a href="{{url('/')}}/uploads/gallery/{{$Gallery->image}}" data-rel="prettyPhoto[portfolio]" class="work-image gallery-thumbnail">
                    <!-- Item Image -->
                    <img class="img-thumbnail" src="{{url('/')}}/uploads/gallery/{{$Gallery->image}}" alt="">
                    <!-- Item Details -->
                    <div class="item-details">
                        <!-- Item Header -->
                        <h1 class="oswald uppercase white">
                            {{-- Red &amp; Dark --}}
                        </h1>
                    
                    </div>
                    <!-- End Item Details -->
                </a>
                <!-- End Item Link -->
            </div>
            <!-- End Item -->
            @endforeach

        

            
            
        </div><!-- End Portfolio Items -->
    </div><!-- End Portfolio -->
</section>
@endforeach