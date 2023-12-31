@extends('frontend.master')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Login</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-1">
                <div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-15.jpg" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-3">
                <div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-14.jpg" alt="Banner"></a></div>
            </div>

        </div>
    </div><!-- Page Banner Section End -->

    <!-- Login Section Start -->
    <div class="login-section section mt-90 mb-90">
        <div class="container">
            <div class="row">

                <!-- Login -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="ee-login">

                        <h3>Login to your account</h3>
                        <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>
                        @if(Session::has('message'))
                            <h4 class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</h4>
                        @endif
                        <!-- Login Form -->
                        <form action="{{ route('newClientLogin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-30"><input name="email" type="text" placeholder="Type your email address"></div>
                                <div class="col-12 mb-20"><input name="password" type="password" placeholder="Enter your passward"></div>
                                <div class="col-12 mb-15">

                                    {{--<input type="checkbox" id="remember_me">--}}
                                    {{--<label for="remember_me">Remember me</label>--}}

                                    <a href="#">Forgotten pasward?</a>

                                </div>
                                <div class="col-12"><input type="submit" value="LOGIN"></div>
                            </div>
                        </form>
                        <h4>Don’t have account? please click <a href="{{ route('clientRegister') }}">Register</a></h4>

                    </div>
                </div>

                <div class="col-md-1 col-12 d-flex">

                    <div class="login-reg-vertical-boder"></div>

                </div>

                <!-- Login With Social -->
                <div class="col-md-5 col-12 d-flex">

                    <div class="ee-social-login">
                        <h3>Also you can login with...</h3>

                        <a href="#" class="facebook-login">Login with <i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter-login">Login with <i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus-login">Login with <i class="fa fa-google-plus"></i></a>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Login Section End -->

    <!-- Brands Section Start -->
    <div class="brands-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Brand Slider Start -->
                <div class="brand-slider col">
                    <div class="brand-item col"><img src="{{ asset('/') }}frontEnd/assets/images/brands/brand-1.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{ asset('/') }}frontEnd/assets/images/brands/brand-2.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{ asset('/') }}frontEnd/assets/images/brands/brand-3.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{ asset('/') }}frontEnd/assets/images/brands/brand-4.png" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{ asset('/') }}frontEnd/assets/images/brands/brand-5.png" alt="Brands"></div>
                </div><!-- Brand Slider End -->

            </div>
        </div>
    </div><!-- Brands Section End -->

    <!-- Subscribe Section Start -->
    <div class="subscribe-section section bg-gray pt-55 pb-55">
        <div class="container">
            <div class="row align-items-center">

                <!-- Mailchimp Subscribe Content Start -->
                <div class="col-lg-6 col-12 mb-15 mt-15">
                    <div class="subscribe-content">
                        <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                        <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                    </div>
                </div><!-- Mailchimp Subscribe Content End -->


                <!-- Mailchimp Subscribe Form Start -->
                <div class="col-lg-6 col-12 mb-15 mt-15">

                    <form id="mc-form" class="mc-form subscribe-form" >
                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email here" />
                        <button id="mc-submit">subscribe</button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->

                </div><!-- Mailchimp Subscribe Form End -->

            </div>
        </div>
    </div><!-- Subscribe Section End -->
@endsection