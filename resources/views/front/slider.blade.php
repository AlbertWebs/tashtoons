<!-- Home -->
<section id="home" class="container relative pattern-black">

    <div class="fullscreen soft-bg-2 absolute z-1 pattern-blac"></div>

    <!-- Ful Screen Home -->
    <div id="fullscreen" class="image-bga">
        <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="{{url('/')}}/uploads/video/vid.mp4" type="video/mp4">
    </video>

        <!-- Video -->
        {{-- <div id="P10" class="player video-container p-video-v" data-property="{videoURL:'yk7easdY2sM',containment:'#fullscreen',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1, quality:'highres'}"></div> --}}
        <!-- End Video -->

        <!-- Home Elements v2 -->
        <div class="home-elements">
            <!-- Home Inner -->
            {{-- <div class="home-inner v2 t-left"> --}}
            <div class="home-inner">
                <div class="slider-overlays">
                    <img class="slider-image animated" data-animation="fadeInLeft" data-animation-delay="100" data-animation-duration="100" src="{{url('/')}}/uploads/slider/level5Productions-04.png" alt="" >
                    {{--  --}}
                    <p class="font_8 animated" data-animation="fadeInLeft" data-animation-delay="100" data-animation-duration="100" style="font-size:15px; line-height:1.7em;">
                        <span style="letter-spacing:0.02em; color:#ffffff; font-family:montserrat,sans-serif; font-size:15px">
                            Home to a robust roster of highly experienced
                            directors and producers with distinct yet
                            complementary strengths and passions, we
                            create compelling content for every platform
                            from traditional TVCs and documentaries to
                            digital content, music videos and stills
                            campaigns. Based in Nairobi Level Five offers a
                            stable of hot young talent perfectly positioned
                            to provide the fresh content today's market
                            demands. 
                        </span>
                    </p>
                    {{--  --}}
                    {{-- Button here --}}
                    <span><br></span>
                    <a href="#showreel" target="_blank" class="uppercase showreel-btn scroll animated" data-animation="fadeInUp" data-animation-delay="100" data-animation-duration="100">
                        Watch Our Showreel <i class="fa fa-video-camera"></i>
                    </a>
                    {{-- Button Here --}}
                </div>
            </div><!-- End Home Inner -->
        </div><!-- End Home Elements -->
    </div>
    <!-- End Ful Screen Home -->
</section><!-- End Home Section -->