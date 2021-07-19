
<?php $Banner = DB::table('banners')->where('section','Services')->get(); ?>
@foreach ($Banner as $banner)
<!-- What We Do Section -->
<section id="servicess" class="container soft-bg-1 parallax animated" data-animation="fadeIn" data-animation-delay="200" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">
    <!-- What We Do Inner -->
    <div class="inner">
        <!-- Header -->
        {{--  --}}
        <div class="features">
            <div class="service-overlays animated" data-animation="fadeIn" data-animation-delay="800">
                <img class="service-image" src="{{url('/')}}/uploads/banners/services.webp" alt="" >
                <br>
            </div>
            {{-- <div class="header-strips-one t-right" ></div> --}}
            <!-- Header Description -->
        </div>
        {{--  --}}
        <br><br>
        <!-- Header Strip(s) -->
        {{-- <div class="header-strips-one"></div> --}}
    
    </div><!-- End What We Do Inner -->
</section><!-- End What We Do Section -->
@endforeach

<?php $Banner = DB::table('banners')->where('section','Services2')->get(); ?>
@foreach ($Banner as $banner)
<section id="featured-works" class="container soft-bg-1" style="background-image:url('{{url('/')}}/uploads/banners/{{$banner->image}}');">

    <!-- Inner -->
    <div class="inner fullwidth">
        <!-- Second Area -->
        <div class="inner feature-second-area t-center">

            {{-- Services Goes Here --}}
            <div class="container">
                <div class="row">
                    <div class="row margindiv">
                        <?php $Service1 = App\Models\Service::find(1); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service1->animation}}" data-animation-delay="300">
                            <div class="containerss">
                                <img src="{{url('/')}}/uploads/services/{{$Service1->image}}" alt="{{$Service1->title}}" class="imagess">
                                <div class="overlayss">
                                <h1>{{$Service1->title}}</h1>
                                <div class="textss"> {!! html_entity_decode($Service1->content, ENT_QUOTES, 'UTF-8') !!}</div>
                                </div>
                            </div>
                        </div>

                        <?php $Service2 = App\Models\Service::find(2); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service2->animation}}" data-animation-delay="300">
                            <div class="containerss">
                                <img src="{{url('/')}}/uploads/services/{{$Service2->image}}" alt="{{$Service2->title}}" class="imagess">
                                <div class="overlayss">
                                <h1>{{$Service2->title}}</h1>
                                <div class="textss"> {!! html_entity_decode($Service2->content, ENT_QUOTES, 'UTF-8') !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row margindiv">
                        <?php $Service3 = App\Models\Service::find(3); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service3->animation}}" data-animation-delay="300">
                            <div class="containerss">
                                <img src="{{url('/')}}/uploads/services/{{$Service3->image}}" alt="{{$Service3->title}}" class="imagess">
                                <div class="overlayss">
                                <h1>{{$Service3->title}}</h1>
                                <div class="textss"> {!! html_entity_decode($Service3->content, ENT_QUOTES, 'UTF-8') !!}</div>
                                </div>
                            </div>
                        </div>

                        <?php $Service4 = App\Models\Service::find(4); ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service4->animation}}" data-animation-delay="300">
                            <div class="containerss">
                                <img src="{{url('/')}}/uploads/services/{{$Service4->image}}" alt="{{$Service4->title}}" class="imagess">
                                <div class="overlayss">
                                <h1>{{$Service4->title}}</h1>
                                <div class="textss"> {!! html_entity_decode($Service4->content, ENT_QUOTES, 'UTF-8') !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                  {{--  --}}
                  <div class="row margindiv">
                    <?php $Service5 = App\Models\Service::find(5); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service5->animation}}" data-animation-delay="300">
                        <div class="containerss">
                            <img src="{{url('/')}}/uploads/services/{{$Service5->image}}" alt="{{$Service5->title}}" class="imagess">
                            <div class="overlayss">
                            <h1>{{$Service5->title}}</h1>
                            <div class="textss"> {!! html_entity_decode($Service5->content, ENT_QUOTES, 'UTF-8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <?php $Service6 = App\Models\Service::find(6); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service6->animation}}" data-animation-delay="300">
                        <div class="containerss">
                            <img src="{{url('/')}}/uploads/services/{{$Service6->image}}" alt="{{$Service6->title}}" class="imagess">
                            <div class="overlayss">
                            <h1>{{$Service6->title}}</h1>
                            <div class="textss"> {!! html_entity_decode($Service6->content, ENT_QUOTES, 'UTF-8') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row margindiv">
                    <?php $Service7 = App\Models\Service::find(7); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service7->animation}}" data-animation-delay="300">
                        <div class="containerss">
                            <img src="{{url('/')}}/uploads/services/{{$Service7->image}}" alt="{{$Service7->title}}" class="imagess">
                            <div class="overlayss">
                            <h1>{{$Service7->title}}</h1>
                            <div class="textss"> {!! html_entity_decode($Service7->content, ENT_QUOTES, 'UTF-8') !!}</div>
                            </div>
                        </div>
                    </div>

                    <?php $Service8 = App\Models\Service::find(8); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animated single-service" data-animation="{{$Service8->animation}}" data-animation-delay="300">
                        <div class="containerss">
                            <img src="{{url('/')}}/uploads/services/{{$Service8->image}}" alt="{{$Service8->title}}" class="imagess">
                            <div class="overlayss">
                            <h1>{{$Service8->title}}</h1>
                            <div class="textss"> {!! html_entity_decode($Service8->content, ENT_QUOTES, 'UTF-8') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>

                
                    


                </div>
              </div>
            {{-- Services Goes Here --}}

            <!-- Button -->
            <a href="#showreel" class="feature-button scroll">
                <h3 class="uppercase oswald">Watch Showreel</h3>
                <p class="semibold">click to watch our showreel</p>
            </a>

            <!-- Button -->
            <a href="#contact" class="feature-button scroll">
                <h3 class="uppercase oswald">keep in touch</h3>
                <p class="semibold">send us a message</p>
            </a>

        </div>
    </div>
</section>
@endforeach