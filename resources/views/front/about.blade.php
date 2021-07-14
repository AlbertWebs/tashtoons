<section id="features" class="big-reserve container about-section min-height animated" data-animation="fadeIn" data-animation-delay="200">
    <?php $About = DB::table('abouts')->get(); ?>
    @foreach ($About as $about)
        <!-- Features Background -->
    <?php $Banner = DB::table('banners')->where('section','About')->get(); ?>
    @foreach ($Banner as $banner)
    <div class="features-background soft-bg-1" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}'); background-position: 50% 50%;"></div>
    @endforeach
    <!-- Features Inner -->
    <div class="inner features">
        <!-- Header -->
        <h1  class="white header uppercase about-header animated" data-animation="fadeInRight" data-animation-delay="200">
            <span id="contents">About Us</span>
        </h1><br>
        <!-- Header Strip(s) -->
        {{-- <div class="header-strips-one t-right" ></div> --}}
        <!-- Header Description -->
        <h2 class="description white about-text animated" data-animation="fadeInRight" data-animation-delay="400">
            {!! html_entity_decode($about->about, ENT_QUOTES, 'UTF-8') !!}
        </h2>
        
    </div>
    <!-- End Features Inner -->
    @endforeach
</section>