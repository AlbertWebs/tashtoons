<?php $Banner = DB::table('banners')->where('section','Showreel')->get(); ?>
    @foreach ($Banner as $banner)

<?php
    // $imgid = 572640847;
    // $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
    // $thumbnail =  $hash[0]['thumbnail_large'];
    // $title =  $hash[0]['title'];
    // $description =  $hash[0]['description'];
?>  
<?php $Video = DB::table('videos')->where('id','19')->limit('1')->get(); ?>
@foreach($Video as $Vid)
<section id="showreel" class="watch-our-video m_slide1 t-center min-height animated soft-bg-11 pattern-black" data-animation="fadeIn" data-animation-delay="200"  style="background-image:url('{{url('/')}}/uploads/videos/{{$Vid->image}}');">
        <a id="reveal" href="https://vimeo.com/manage/videos/{{$Vid->link}}" class="video-link mp-video">
            <h2 class="tv-com">TV Commercials</h2>
            <i class="fa fa-play fa-2x round"></i>
            <h3 class="animated" data-animation="fadeIn" data-animation-delay="400">
                Play Video
            </h3>
        </a>
</section>
@endforeach
@endforeach
{{--  --}}
@include('front.showreels')