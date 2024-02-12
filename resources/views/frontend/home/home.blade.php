@extends('frontend.master')

@section('content')
    <!-- =========================== BANNER PART START =========================== -->
    <section id="new-banner" style="padding-top: 42px;">
        <div class="slider-container">
            <div class="slider">
                @php
                    $banners = json_decode($header->banner,true);
                @endphp
                @if(!empty($header->banner) && is_array($banners))
                    @foreach($banners as $key=>$banner)
                        <div class="slide">
                            <img src="{{asset($banner)}}" alt="...">
{{--                            <div class="slide-text">Slide 1 Text</div>--}}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="slider-controls">
                <div class="slider-control prev-slide">
                    <i class="fa fa-chevron-left"></i>
                </div>
                <div class="slider-dots">
                    <!-- Dots will be added dynamically using JavaScript -->
                </div>
                <div class="slider-control next-slide">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>

    </section>
{{--    <section id="banner">--}}
{{--        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">--}}
{{--            <div class="carousel-inner">--}}
{{--                @php--}}
{{--                    $banners = json_decode($header->banner,true);--}}
{{--                @endphp--}}
{{--                @if(!empty($header->banner) && is_array($banners))--}}
{{--                    @foreach($banners as $key=>$banner)--}}
{{--                        <div class="carousel-item @if($key == 0) active @endif">--}}
{{--                            <img src="{{asset($banner)}}" class="d-block w-100" alt="...">--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                <span class="visually-hidden">Previous</span>--}}
{{--            </button>--}}
{{--            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                <span class="visually-hidden">Next</span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <video autoplay muted loop class="myVideo" id="myVideo">--}}
{{--            <source src="https://www.thedoodleinc.com/images/home-video-banner.mp4" type="video/mp4">--}}
{{--        </video>--}}
{{--        <div class="container">--}}
{{--            <div class="">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="banner-text">--}}
{{--                        <h1>{!!$header->tittle!!}</h1>--}}
{{--                        <div class="web_mob_cloud">--}}
{{--                            <a href="#">Web</a>--}}
{{--                            <a href="#">Mobile</a>--}}
{{--                            <a href="#">Cloud</a>--}}
{{--                        </div>--}}
{{--                        <div class="banner-email">--}}
{{--                            <div class="form">--}}
{{--                                <form action="">--}}
{{--                                    <input type="text" placeholder="Email Address..." class="form-control subscribe">--}}
{{--                                    <button class="banner-overlay">--}}
{{--                                        <span>Get Started</span>--}}
{{--                                        <div class="banner-arrow">--}}
{{--                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                                <g clip-path="url(#clip0)">--}}
{{--                                                    <path--}}
{{--                                                        d="M8.50116 4.178L5.51578 1.19254C5.43056 1.10732 5.31698 1.06055 5.19587 1.06055C5.07463 1.06055 4.96111 1.10739 4.87589 1.19254L4.60484 1.46366C4.51969 1.54875 4.47278 1.6624 4.47278 1.78357C4.47278 1.90468 4.51969 2.02216 4.60484 2.10725L6.34647 3.85271H0.813236C0.563759 3.85271 0.366638 4.04801 0.366638 4.29756V4.68085C0.366638 4.93039 0.563759 5.14539 0.813236 5.14539H6.36623L4.60491 6.9006C4.51976 6.98582 4.47285 7.09637 4.47285 7.21755C4.47285 7.33859 4.51976 7.45076 4.60491 7.53591L4.87596 7.80616C4.96118 7.89138 5.0747 7.93782 5.19594 7.93782C5.31705 7.93782 5.43063 7.89077 5.51585 7.80555L8.50123 4.82017C8.58665 4.73468 8.63363 4.62056 8.63329 4.49925C8.63356 4.37754 8.58665 4.26335 8.50116 4.178Z"--}}
{{--                                                        fill="#444444"/>--}}
{{--                                                </g>--}}
{{--                                                <defs>--}}
{{--                                                    <clipPath id="clip0">--}}
{{--                                                        <rect width="8.26667" height="8.26667" fill="white"--}}
{{--                                                              transform="translate(0.366638 0.366211)"/>--}}
{{--                                                    </clipPath>--}}
{{--                                                </defs>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}

{{--                            <p>Let’s discuss your project</p>--}}
{{--                        </div>--}}
{{--                        <div id="myBtn" onclick="myFunction()" class="banner-video-player">--}}
{{--                            <svg role="button" width="190" height="190" viewBox="0 0 190 190" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <g filter="url(#filter0_d)">--}}
{{--                                    <circle cx="95" cy="95" r="45" fill="#4F81BD"/>--}}
{{--                                </g>--}}
{{--                                <path--}}
{{--                                    d="M83 85C83 83.8954 83.8954 83 85 83H90C91.1046 83 92 83.8954 92 85V105C92 106.105 91.1046 107 90 107H85C83.8954 107 83 106.105 83 105V85Z"--}}
{{--                                    fill="white"/>--}}
{{--                                <path--}}
{{--                                    d="M98 85C98 83.8954 98.8954 83 100 83H105C106.105 83 107 83.8954 107 85V105C107 106.105 106.105 107 105 107H100C98.8954 107 98 106.105 98 105V85Z"--}}
{{--                                    fill="white"/>--}}
{{--                                <defs>--}}
{{--                                    <filter id="filter0_d" x="0" y="0" width="190" height="190"--}}
{{--                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">--}}
{{--                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>--}}
{{--                                        <feColorMatrix in="SourceAlpha" type="matrix"--}}
{{--                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>--}}
{{--                                        <feOffset/>--}}
{{--                                        <feGaussianBlur stdDeviation="25"/>--}}
{{--                                        <feColorMatrix type="matrix"--}}
{{--                                                       values="0 0 0 0 0.956863 0 0 0 0 0.501961 0 0 0 0 0.223529 0 0 0 0.4 0"/>--}}
{{--                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>--}}
{{--                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"--}}
{{--                                                 result="shape"/>--}}
{{--                                    </filter>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- =========================== BANNER PART END =========================== -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
{{--                    <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>--}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{asset($header->popImage)}}" class="img-fluid" alt="Full Body Image">
                </div>
                <!-- You can omit the modal-footer if you don't need it -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- Additional buttons or actions can be added here -->
                </div>
            </div>
        </div>
    </div>


    <aside id="mh">
        <!-- creating gap started  -->
        <div class="inside_gap"></div>
        <section id="mh_advance_tech_use" class="padding">
            <div class="container">
                <div class="first_row">
                    <div class="row">
                        <div class="col-lg-8 col-sm-12" data-aos="fade-up">
                            {!! $service->tittle !!}

                            <p>
                                {!! $service->description !!}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="tech_rows">
                    <div class="row">
                        <!-- Internet -->
                        @foreach($homeService as $services)
                            <div class="col-lg-4 col-sm-12" data-aos="fade-up">
                                <div class="mh_tech_box">
                                    <div class="tech_img">
                                        <img src="{{asset($services->image)}}"
                                             alt="images">
                                    </div>
                                    <a href="{{$services->url? url($services->url) :'#'}}" ><h5>{!! $services->tittle !!}</h5></a>
                                    <p>
                                        {!! $services->shortDescription !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </section>

        <!-- Mob version advance technology Start -->
        <section id="Mob_technology">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header_part">
                            {!! $service->tittle !!}
                            <p>
                                {!! $service->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mob_advance_technology">
                    @foreach($homeService as $services)
                        <div class="slider_item">

                            <div class="logo">
                                <img src="{{asset($services->image)}}"
                                     alt="images">
                            </div>

                            <h4>{!! $services->tittle !!}</h4>
                            <p>{!! $services->shortDescription !!}</p>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Mob version advance technology END -->

        <!-- creating gap started  -->
        <div class="inside_gap"></div>
        <!-- Creating gap ended  -->

        <section id="mh_read_block">
            <div class="container">
                <div class="mh_read_blog_heading text-center">
                    <h1>{!! $overview->tittle !!}</h1>
                    <p>{!! $overview->description !!}</p>
                    <a href="page/about" class="link_span">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.6453 4.7496L6.73847 0.842661C6.62695 0.731137 6.47831 0.669922 6.31982 0.669922C6.16115 0.669922 6.0126 0.731225 5.90108 0.842661L5.54636 1.19746C5.43493 1.30881 5.37354 1.45754 5.37354 1.61611C5.37354 1.7746 5.43493 1.92835 5.54636 2.03969L7.82556 4.32391H0.584444C0.257965 4.32391 0 4.5795 0 4.90606V5.40766C0 5.73422 0.257965 6.01558 0.584444 6.01558H7.85142L5.54645 8.31255C5.43502 8.42408 5.37363 8.56876 5.37363 8.72734C5.37363 8.88574 5.43502 9.03253 5.54645 9.14397L5.90116 9.49762C6.01269 9.60915 6.16124 9.66992 6.31991 9.66992C6.4784 9.66992 6.62703 9.60836 6.73856 9.49683L10.6454 5.58998C10.7572 5.47811 10.8187 5.32876 10.8182 5.17001C10.8186 5.01073 10.7572 4.8613 10.6453 4.7496Z"
                                fill="#4F81BD"/>
                        </svg>
                        More OVerview
                    </a>

                </div>
                <div class="mh_blog_images">
                    <div class="row custome_row">
                        @foreach($homeOverview as $overviews)
                            <div class="col-lg-4 col-md-4 custome-col" data-aos="fade-up"
                                 data-aos-anchor-placement="bottom-bottom">
                                <a href="blog_single.html"><img class="img-responsive"
                                                                src="{{asset($overviews->image)}}"
                                                                alt="" srcset=""></a>
                                <div class="mh_blog_images_cat">
                                    <h6><span class="cat_name"><a href="blog_single.html">{!! $overviews->tittle !!}</a></span> <span
                                            class="pull-right read_status">5 min
                                        read</span></h6>
                                    <p><a href="blog_single.html">{!! $overviews->shortDescription !!}</a></p>
                                </div>
                                <div class="mh_blog_images_details"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- creating gap started  -->
        <div class="inside_gap"></div>
        <!-- Creating gap ended  -->

        <section id="mh_why_us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h1>{!! $why->tittle !!}</h1>
                        <ul class="mh_why_us_tabs nav nav-tabs mob_tab">
                            @foreach($homeWhy as $whys)
                                <li class="nav-item">
                                    <a class="{{$whys->aboutShow == 'Y' ? 'active' : ''}}" href="#{{$whys->url}}" data-toggle="tab"><i class="fa fa-circle li_dots"></i>
                                        {!! $whys->tittle !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mh_why_us_details ">
                        <div class="tab-content">
                            @foreach($homeWhy as $whys)
                                <div id="{{$whys->url}}" class="tab-pane {{$whys->aboutShow == 'Y' ? 'active' : ''}}">
                                    <h1>
                                        {!! $whys->shortDescription !!}
                                    </h1>
                                        {!! $whys->about !!}
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- creating gap started  -->
        <div class="inside_gap"></div>
        <!-- Creating gap ended  -->

        <section id="mh_projects">
            <div class="container">
                <div class="mh_about_project_">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>{!! $project->tittle !!}</h1>
                            <p>{!! $project->description !!}
                            </p>
                            <a href="recent_projects.html" class="link_span">
                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.6453 4.7496L6.73847 0.842661C6.62695 0.731137 6.47831 0.669922 6.31982 0.669922C6.16115 0.669922 6.0126 0.731225 5.90108 0.842661L5.54636 1.19746C5.43493 1.30881 5.37354 1.45754 5.37354 1.61611C5.37354 1.7746 5.43493 1.92835 5.54636 2.03969L7.82556 4.32391H0.584444C0.257965 4.32391 0 4.5795 0 4.90606V5.40766C0 5.73422 0.257965 6.01558 0.584444 6.01558H7.85142L5.54645 8.31255C5.43502 8.42408 5.37363 8.56876 5.37363 8.72734C5.37363 8.88574 5.43502 9.03253 5.54645 9.14397L5.90116 9.49762C6.01269 9.60915 6.16124 9.66992 6.31991 9.66992C6.4784 9.66992 6.62703 9.60836 6.73856 9.49683L10.6454 5.58998C10.7572 5.47811 10.8187 5.32876 10.8182 5.17001C10.8186 5.01073 10.7572 4.8613 10.6453 4.7496Z"
                                        fill="#4F81BD"/>
                                </svg>
                                View All Projects
                            </a>
                        </div>
                        <div class="col-lg-4 mh_about_project_numbers">
                            <h4>Millions</h4>
                            <p>of total impression</p>
                        </div>
                    </div>
                </div>


                <div class="mh_projegct_images">
                    <div class="row">
                        @foreach($homeProject as $projects)
                            <div class="{{$projects->class}} mh_projegct_images_frame" data-aos="flip-up">
                                <a href="single_recent_projects.html"><img class="img-responsive" src="{{ asset($projects->image) }}" alt="" srcset=""></a>
                                <p class="mh_caption">{!! $projects->shortDescription !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Mobile Recent Project START  -->
        <section id="mob_recent_Project">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Our Recent Projects </h1>
                        <p>We enable growing business and enthusiastic individuals who want to convert their ideas.
                        </p>
                        <a href="recent_projects.html" class="link_span">
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6453 4.7496L6.73847 0.842661C6.62695 0.731137 6.47831 0.669922 6.31982 0.669922C6.16115 0.669922 6.0126 0.731225 5.90108 0.842661L5.54636 1.19746C5.43493 1.30881 5.37354 1.45754 5.37354 1.61611C5.37354 1.7746 5.43493 1.92835 5.54636 2.03969L7.82556 4.32391H0.584444C0.257965 4.32391 0 4.5795 0 4.90606V5.40766C0 5.73422 0.257965 6.01558 0.584444 6.01558H7.85142L5.54645 8.31255C5.43502 8.42408 5.37363 8.56876 5.37363 8.72734C5.37363 8.88574 5.43502 9.03253 5.54645 9.14397L5.90116 9.49762C6.01269 9.60915 6.16124 9.66992 6.31991 9.66992C6.4784 9.66992 6.62703 9.60836 6.73856 9.49683L10.6454 5.58998C10.7572 5.47811 10.8187 5.32876 10.8182 5.17001C10.8186 5.01073 10.7572 4.8613 10.6453 4.7496Z"
                                    fill="#4F81BD"/>
                            </svg>
                            View All Projects
                        </a>
                    </div>
                    <div class="col-lg-4 mh_about_project_numbers">
                        <h4>Millions</h4>
                        <p>of total impression</p>
                    </div>
                </div>
            </div>

            <div class="Mob_recent_slider">

                <div class="img_slider">
                    <a href="single_recent_projects.html"><img
                            src="{{ asset('/') }}/assets/frontend/images/mob_recent_1.png" alt="images"></a>
                    <div class="Mob_recent_slider_overlay">
                        <p>Music Apps for Likeopedia</p>
                    </div>
                </div>

                <div class="img_slider">
                    <a href="single_recent_projects.html"><img
                            src="{{ asset('/') }}/assets/frontend/images/mob_recent_1.png" alt="images"></a>
                    <div class="Mob_recent_slider_overlay">
                        <p>Music Apps for Likeopedia</p>
                    </div>
                </div>

            </div>

            <div class="Mob_recent_slider Mob_recent_slider_right">

                <div class="img_slider">
                    <a href="single_recent_projects.html"><img
                            src="{{ asset('/') }}/assets/frontend/images/mob_recent_1.png" alt="images"></a>
                    <div class="Mob_recent_slider_overlay">
                        <p>Music Apps for Likeopedia</p>
                    </div>
                </div>

                <div class="img_slider">
                    <a href="single_recent_projects.html"><img
                            src="{{ asset('/') }}/assets/frontend/images/mob_recent_1.png" alt="images"></a>
                    <div class="Mob_recent_slider_overlay">
                        <p>Music Apps for Likeopedia</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Mobile Recent Project END  -->


        <!-- creating gap started  -->
        <div class="inside_gap footer"></div>
        <!-- Creating gap ended  -->

        <!-- =========================== FOOTER PART START =========================== -->

        <section id="mh_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rs-footer-text">
                            <h3>Want to make something great with us? </h3>

                            <div class="row">
                                <div class="col-lg-8">
                                    <p>Drop us a line <a href="">here</a>, we'll get in touch. Or mail us at
                                        hello@bicm.ac.bd. We'll see if we're a match and how we can help each other.</p>
                                </div>
                                <div class="col-lg-4">
                                    <form action="">
                                        <button class="banner-overlay">
                                            <span>Get Started</span>
                                            <div class="banner-arrow">
                                                <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M8.50116 4.178L5.51578 1.19254C5.43056 1.10732 5.31698 1.06055 5.19587 1.06055C5.07463 1.06055 4.96111 1.10739 4.87589 1.19254L4.60484 1.46366C4.51969 1.54875 4.47278 1.6624 4.47278 1.78357C4.47278 1.90468 4.51969 2.02216 4.60484 2.10725L6.34647 3.85271H0.813236C0.563759 3.85271 0.366638 4.04801 0.366638 4.29756V4.68085C0.366638 4.93039 0.563759 5.14539 0.813236 5.14539H6.36623L4.60491 6.9006C4.51976 6.98582 4.47285 7.09637 4.47285 7.21755C4.47285 7.33859 4.51976 7.45076 4.60491 7.53591L4.87596 7.80616C4.96118 7.89138 5.0747 7.93782 5.19594 7.93782C5.31705 7.93782 5.43063 7.89077 5.51585 7.80555L8.50123 4.82017C8.58665 4.73468 8.63363 4.62056 8.63329 4.49925C8.63356 4.37754 8.58665 4.26335 8.50116 4.178Z"
                                                            fill="#444444"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="8.26667" height="8.26667" fill="white"
                                                                  transform="translate(0.366638 0.366211)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="tiny_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="tiny_footer_logo">
                            <a class="logo" href="index.html"><img class="img-responsive"
                                                                   src="{{ asset('/') }}/assets/frontend/images/tiny_.png"
                                                                   alt="" srcset=""></a>
                            <span class="text">© Copyright 2021 BICM.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6 col-md-6">
                        <div class="social_icon">
                            <a>
                                <svg width="10" height="19" viewBox="0 0 10 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.91797 3.23828H9.64062V0.390625C9.32422 0.355469 8.33984 0.25 7.14453 0.25C4.71875 0.25 3.03125 1.76172 3.03125 4.50391V7H0.359375V10.1992H3.03125V18.25H6.33594V10.1992H8.9375L9.35938 7H6.33594V4.82031C6.33594 3.87109 6.61719 3.23828 7.91797 3.23828Z"
                                        fill="black"/>
                                </svg>
                            </a>
                            <a>
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.1367 4.59375C16.8398 4.06641 17.4727 3.43359 17.9648 2.69531C17.332 2.97656 16.5938 3.1875 15.8555 3.25781C16.6289 2.80078 17.1914 2.09766 17.4727 1.21875C16.7695 1.64062 15.9609 1.95703 15.1523 2.13281C14.4492 1.39453 13.5 0.972656 12.4453 0.972656C10.4062 0.972656 8.75391 2.625 8.75391 4.66406C8.75391 4.94531 8.78906 5.22656 8.85938 5.50781C5.80078 5.33203 3.05859 3.85547 1.23047 1.64062C0.914062 2.16797 0.738281 2.80078 0.738281 3.50391C0.738281 4.76953 1.37109 5.89453 2.39062 6.5625C1.79297 6.52734 1.19531 6.38672 0.703125 6.10547V6.14062C0.703125 7.93359 1.96875 9.41016 3.65625 9.76172C3.375 9.83203 3.02344 9.90234 2.70703 9.90234C2.46094 9.90234 2.25 9.86719 2.00391 9.83203C2.46094 11.3086 3.83203 12.3633 5.44922 12.3984C4.18359 13.3828 2.60156 13.9805 0.878906 13.9805C0.5625 13.9805 0.28125 13.9453 0 13.9102C1.61719 14.9648 3.55078 15.5625 5.66016 15.5625C12.4453 15.5625 16.1367 9.97266 16.1367 5.08594C16.1367 4.91016 16.1367 4.76953 16.1367 4.59375Z"
                                        fill="black"/>
                                </svg>
                            </a>
                            <a>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.64062 16V5.48828H0.371094V16H3.64062ZM1.98828 4.08203C3.04297 4.08203 3.88672 3.20312 3.88672 2.14844C3.88672 1.12891 3.04297 0.285156 1.98828 0.285156C0.96875 0.285156 0.125 1.12891 0.125 2.14844C0.125 3.20312 0.96875 4.08203 1.98828 4.08203ZM15.8398 16H15.875V10.2344C15.875 7.42188 15.2422 5.24219 11.9375 5.24219C10.3555 5.24219 9.30078 6.12109 8.84375 6.92969H8.80859V5.48828H5.67969V16H8.94922V10.7969C8.94922 9.42578 9.19531 8.125 10.8828 8.125C12.5703 8.125 12.6055 9.67188 12.6055 10.9023V16H15.8398Z"
                                        fill="black"/>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <!-- =========================== FOOTER PART END =========================== -->


    </aside>

    <!-- Code ended by Doodle Inc. -->

    <!-- ========== BACK TO TOP START ========== -->
    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- ========== BACK TO TOP END ========== -->


    <!-- =========================== APPROACH PART END =========================== -->
@endsection
