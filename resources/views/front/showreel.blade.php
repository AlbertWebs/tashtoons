<?php $Banner = DB::table('banners')->where('section','Showreel')->get(); ?>
    @foreach ($Banner as $banner)

<section id="showreel" class="watch-our-video m_slide1 t-center min-height enableBlur animated" data-animation="fadeIn" data-animation-delay="200" >
    <div style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');  background-size:cover;  height: 100%;">
        <a id="reveal" href="https://vimeo.com/manage/videos/572640847" class="video-link mp-video disableBlur">
            <h2 class="tv-com">TV Commercials</h2>
            <i class="fa fa-play fa-2x round"></i>
            <h3 class="animated" data-animation="fadeIn" data-animation-delay="400">
                Play Video
            </h3>
        </a>
    </div>
       
   

</section>
@endforeach
{{--  --}}
@include('front.showreels')