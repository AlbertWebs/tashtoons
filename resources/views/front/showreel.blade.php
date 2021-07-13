<section id="showreel" class="watch-our-video m_slide1 t-center min-height animated" data-animation="fadeIn" data-animation-delay="200">
    
    <a id="reveal" href="https://vimeo.com/manage/videos/572640847" class="video-link mp-video">
        <h2 class="tv-com">TV Commercials</h2>
        <i class="fa fa-play fa-2x round"></i>
        <h3 class="animated" data-animation="fadeIn" data-animation-delay="400">
            Play Video
        </h3>
    </a>

</section>
{{--  --}}
<!-- Featured Works -->
<section id="featured-works" class="container soft-bg-1 extra-showreel">

    <!-- Inner -->
    <div class="fullwidth">
      

        <!-- Works -->
        <div class="works white" style="padding:0px !important">
            {{-- Iterations Starts here --}}
            <?php $Video = DB::table('videos')->inRandomOrder()->limit('10')->get(); ?>
            @foreach($Video as $Vid)
            <!-- Item -->
            <div class="item">
             <!-- Item Link -->
                    <a href="https://vimeo.com/manage/videos/{{$Vid->link}}" class="video-link mp-video" class="work-image">
						<!-- Item Image -->
                        <?php
                            $imgid = $Vid->link;

                            $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));

                          

                            $thumbnail =  $hash[0]['thumbnail_large'];
                            $title =  $hash[0]['title'];
                            $description =  $hash[0]['description'];
                            
                        ?>  
						<img class="img-thumbnail pattern-black" src="{{$thumbnail}}" alt="" />
					</a>



                    <!-- Texts -->
                    <div class="texts">
                        <!-- Item Header -->
                        <h1 class="f-head oswald normal uppercase">
                            {{$title}}
                        </h1>

                        <!-- Item Description -->
                        <h2 class="f-text open-sans normal">
                            {{$description}}
                        </h2>
                    </div>
                <!-- End Texts -->
            </div>
            <!-- End Item -->
            @endforeach


        </div><!-- End Works -->

    
    </div><!-- End Inner -->

</section><!-- End featured Works -->
