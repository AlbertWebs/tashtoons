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
            <div class="home-inner v2 t-left">
                <div class="slider-overlays">
                    <img class="slider-image animated" data-animation="fadeInLeft" data-animation-delay="800" data-animation-duration="800" src="{{url('/')}}/uploads/slider/info.png" alt="" >
                    {{--  --}}
                    <p class="font_8 animated" data-animation="fadeInLeft" data-animation-delay="800" data-animation-duration="800" style="font-size:15px; line-height:1.7em;">
                        <span style="letter-spacing:0.02em; color:#ffffff; font-family:montserrat,sans-serif; font-size:15px">
                            Level Five Productions is an audiovisual production company, founded in February 2010. For over 11 years we have been involved in the production of Television, Radio, Documentary, online branded content, 2D &amp; 3D Animation commercials. 
                        </span>
                    </p>
                    {{--  --}}
                    {{-- Button here --}}
                    <span><br></span>
                    <a href="#showreel" target="_blank" class="uppercase showreel-btn scroll animated" data-animation="fadeInUp" data-animation-delay="800" data-animation-duration="800">
                        Watch Our Showreel <i class="fa fa-video-camera"></i>
                    </a>
                    {{-- Button Here --}}
                </div>
            </div><!-- End Home Inner -->
        </div><!-- End Home Elements -->
    </div>
    <!-- End Ful Screen Home -->
</section><!-- End Home Section -->