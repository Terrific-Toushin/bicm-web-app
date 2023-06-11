@extends('frontend.master')


@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Register</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Register</a></li>
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

    <!-- Register Section Start -->
    <div class="register-section section mt-90 mb-90">
        <div class="container">
            <form action="{{route('newClientRegister')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">


                <!-- Register -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="ee-register checkout-form">

                        <h3>We will need for your registration</h3>
                        <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>

                        <!-- Register Form -->

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <input type="text" name="first_name" placeholder="First Name">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="text" name="last_name" placeholder="Last Name">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="email" name="email" placeholder="Email Address">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="text" name="mobile" placeholder="Phone number">
                            </div>

                            <div class="col-12">
                                <input type="text" name="address1" placeholder="Address line 1">
                                <input type="text" name="address2" placeholder="Address line 2">
                            </div>

                            <div class="col-md-6 col-12">
                                <select class="nice-select" name="country">
                                    <option>Bangladesh</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="text" name="town" placeholder="Town/Thana">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="text" name="district" placeholder="District">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="text" name="postal_code" placeholder="Post Code">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="password" name="password" placeholder="Password">
                            </div>

                            <div class="col-md-6 col-12">
                                <input type="password" name="confirm_password" placeholder="Confirm Password">
                            </div>

                            <div class="col-12">
{{--                                <input class="submit-cs" type="submit" value="register">--}}
                                <a href="{{ route('clientDashboard') }}" class="btn btn-success">register</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-12 d-flex">

                    <div class="login-reg-vertical-boder"></div>

                </div>

                <!-- Account Image -->
                <div class="col-md-5 col-12 d-flex">

                    <div class="ee-account-image">
                        <h3>Upload your Image</h3>

                        <img src="{{ asset('/') }}frontEnd/assets/images/account-image-placeholder.jpg" alt="Account Image Placeholder" class="image-placeholder" style="height: 250px">

                        <div class="account-image-upload">
                            <input type="file" name="chooseFile" id="account-image-upload">
                            <label class="account-image-label" for="account-image-upload">Choose your image in jpEG (250x250)</label>
                        </div>

                    </div>

                </div>

            </div>
            </form>
        </div>
    </div><!-- Register Section End -->

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
