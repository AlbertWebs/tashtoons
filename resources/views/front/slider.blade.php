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
        <div class="home-elements animated" data-animation="fadeInLeft" data-animation-delay="8000">
            <!-- Home Inner -->
            <div class="home-inner v2 t-left">
                
                <!-- Home Text Slider -->
                <div class="home-text-slider relative">
                    <div class="text-slider clearfix">
                        <!-- Home Text Slides -->
                        <ul class="home-texts clearfix t-left semibold">
                            <li class="slide white uppercase">We are in Film</li>
                            <li class="slide white uppercase">We are in Production</li>
                            <li class="slide white uppercase">We are in Animation</li>
                        </ul>
                        <!-- End Home Text Slides -->
                        <!-- Home Fixed Text -->
                        {{-- <h1 class="home-fixed-text t-left">XYZ Productions is an audiovisual production company founded in February 2004. For over 17 years we have been involved in the production of Television, Radio, Documentary, online branded content, 2D & 3D Animation commercials.</h1>  --}}
                        {{-- call to action --}}
                        {{-- <h3 class=""> --}}
                            {{-- <br><br> --}}
                            <div class="clearfix"><br></div>
                            <a href="#showreel" class="home-btn uppercase scroll">
                                Watch Showreel <i class="fa fa-video-camera"></i>
                            </a>
                        {{-- </h3> --}}
                    </div>
                </div>
                <!-- End Home Text Slider -->

                
            </div><!-- End Home Inner -->
        </div><!-- End Home Elements -->
    </div>
    <!-- End Ful Screen Home -->
</section><!-- End Home Section -->