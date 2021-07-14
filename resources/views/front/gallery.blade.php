<?php $Banner = DB::table('banners')->where('section','Gallery')->get(); ?>
@foreach ($Banner as $banner)
<section id="portfolio" class="container soft-bg-1" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
		
    <!-- Portfolio Inner -->
    <div class="inner">
        <!-- Header -->
        <h1 class="header about-header white uppercase dark oswald animated" data-animation="fadeInRight" data-animation-delay="300">
            <span id="contents">Gallery</span>
        </h1>
        <!-- Header Strip(s) -->
        <div class="header-strips-one"></div>
        <!-- Header Description -->
        
    </div><!-- End Portfolio Inner -->
    <div class="portfolio t-center fullwidth relative">

        

        <!-- Portfolio Items -->
        <div class="portfolio-items t-center isotope" style="position: relative; overflow: hidden; height: 744px;">

            <?php $Video = DB::table('videos')->inRandomOrder()->limit('10')->get(); ?>
            @foreach($Video as $Vid)
            <!-- Item -->
            <div class="item five branding isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                <?php
                    $imgid = $Vid->link;
                    $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
                    $thumbnail =  $hash[0]['thumbnail_large'];
                ?>  
                <!-- Item Link -->
                <a href="{{$thumbnail}}" data-rel="prettyPhoto[portfolio]" class="work-image gallery-thumbnail">
                    <!-- Item Image -->
                    <img class="img-thumbnail" src="{{$thumbnail}}" alt="">
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