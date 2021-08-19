<!-- Featured Works -->
<section id="featured-works" class="container soft-bg-1 extra-showreel">

    <!-- Inner -->
    <div class="fullwidth">
      

        <!-- Works -->
        <div class="works white" style="padding:0px !important">
            {{-- Iterations Starts here --}}
            <?php $Video = DB::table('videos')->get(); ?>
            @foreach($Video as $Vid)
            <!-- Item -->
            <div class="item">
             <!-- Item Link -->
                    <a href="https://vimeo.com/manage/videos/{{$Vid->link}}" class="video-link mp-video" class="work-image">
						<!-- Item Image -->
                        <?php
                            // Get images
                            // $imgid = $Vid->link;

                            // $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));

                          

                            // $thumbnail =  $hash[0]['thumbnail_large'];
                            // $title =  $hash[0]['title'];
                            // $description =  $hash[0]['description'];
                            
                        ?>  
						{{-- <img class="img-thumbnail pattern-black" src="{{$thumbnail}}" alt="" /> --}}
                        <img class="img-thumbnail pattern-black" src="{{url('/')}}/uploads/videos/{{$Vid->image}}" alt="" />
					</a>



                    <!-- Texts -->
                    <div class="texts">
                        <!-- Item Header -->
                        <h1 class="f-head oswald normal uppercase">
                            {{$Vid->title}}
                        </h1>

                        <!-- Item Description -->
                        <h2 class="f-text open-sans normal">
                            {{$Vid->title}}
                        </h2>
                    </div>
                <!-- End Texts -->
            </div>
            <!-- End Item -->
            @endforeach


        </div><!-- End Works -->

    
    </div><!-- End Inner -->

</section><!-- End featured Works -->
