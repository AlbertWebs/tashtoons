<?php $SiteSettings = DB::table('site_settings')->get(); ?>
@foreach ($SiteSettings as $SiteSettings)
<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12">
        <ul>
            <li><img src="{{url('/')}}/uploads/users/{{Auth::user()->image }}" alt="">
            </li>
            <li>
                <h5>{{Auth::user()->name}}<span>{{$SiteSettings->location}}</span></h5>
            </li>
            <li></li>
        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="{{url('/')}}/admin" class="menu-active"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a target="_blank" href="{{url('/')}}/" class="menu-active"><i class="fa fa-globe" aria-hidden="true"></i> Visit Website</a>
            </li>

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Home Page Slider  </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/sliders">All Sliders</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addSlider">Add Slider Content</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}
        {{--  --}}
        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Info Content  </a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="{{url('/')}}/admin/editAbout/about">About Us </a>
                    </li>
                    <li><a href="{{url('/')}}/admin/editAbout/who">Who We are</a>
                    </li>
                </ul>
            </div>
        </li>
        {{--  --}}
            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> Banners </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/banners">All Banners</a>
                        </li>
                        {{-- <li><a href="{{url('/')}}/admin/addBanner">Add Banners</a>
                        </li> --}}
                    </ul>
                </div>
            </li>
            {{--  --}}

           

            {{--  --}}
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-comment" aria-hidden="true"></i> Testimonials </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/testimonials">All Testimonials </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addTestimonials">Add Testimonials</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  --}}

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>System Users</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/users">Manage Users</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addUser">Add User</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/admins">Manage Admins</a>
                        </li>
                  
                    </ul>
                </div>
            </li>


            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-wrench" aria-hidden="true"></i> Services </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/services">All Services</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/services/create">Add Service</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/blog">All Blogs</a>
                        </li>
                        <li><a href="{{url('/')}}/admin/addBlog">Add Blog</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li><a href="{{url('/')}}/admin/logo-and-favicon"><i class="fa fa-info" aria-hidden="true"></i> Logo & Favicon </a>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> SiteSettings </a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url('/')}}/admin/SiteSettings">Systems Settings </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/mailerSettings">Mailer Settings </a>
                        </li>
                        <li><a href="{{url('/')}}/admin/credentials">Systems Credentials </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="{{url('/')}}/admin/SocialMediaSettings"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
            </li>
            <li><a href="{{url('/')}}/logout" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </a>
            </li>

        
       
        </ul>
    </div>
</div>
@endforeach