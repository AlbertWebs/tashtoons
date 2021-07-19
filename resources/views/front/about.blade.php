<section id="features" class="big-reserve container about-section min-height t-right">
    <?php $About = DB::table('abouts')->get(); ?>
    @foreach ($About as $about)
        <!-- Features Background -->
    <?php $Banner = DB::table('banners')->where('section','About')->get(); ?>
    @foreach ($Banner as $banner)
    <div class="features-background soft-bg-1" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}'); background-position: 50% 50%;"></div>
    @endforeach
    <!-- Features Inner -->
    <div class="features">
        <div class="about-overlays animated" data-animation="fadeInRight" data-animation-delay="800">
            <img class="slider-image" src="{{url('/')}}/uploads/banners/about-us.webp" alt="" >
            <br>
            <h2 class="description white about-text">
                {!! html_entity_decode($about->about, ENT_QUOTES, 'UTF-8') !!}
            </h2>
        </div>
        {{-- <div class="header-strips-one t-right" ></div> --}}
        <!-- Header Description -->
        
        
    </div>
    <!-- End Features Inner -->
    @endforeach
</section>