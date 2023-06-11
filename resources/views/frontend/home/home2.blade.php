@extends('frontend.master')

@section('content')
    <!-- Hero Section Start -->
    <div class="hero-section section mb-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <!-- Header Category -->
                    <div class="hero-side-category">

                        <div class="row row-5">
                            <div class="col-lg-12 col-md-6 col-12 mb-10"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-12 col-md-6 col-12 mb-10"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a></div></div>
                        </div>

                    </div><!-- Header Bottom End -->

                    <!-- Hero Slider Start -->
                    <div class="hero-slider-five">
                        <div class="row" style="height: 300px">
                            <div class="hero-slider fix">
                                <!-- Hero Item Start -->
                                <div class="hero-item-five" style="background-image: url({{ asset('/') }}frontEnd/assets/images/hero/hero-5-bg-1.jpg); height: 294px">
                                    <div class="row align-items-center justify-content-between">

                                        <!-- Hero Content -->
                                        <div class="hero-content-five col">

                                            <img src="{{ asset('/') }}frontEnd/assets/images/hero/home-5-offer.png" alt="Offer">
                                            <h2>CHOOSE YOUR HOME</h2>
                                            <h1>APPLIANCES</h1>
                                            <a href="#">get it now</a>

                                        </div>

                                    </div>
                                </div><!-- Hero Item End -->

                                <!-- Hero Item Start -->
                                <div class="hero-item-five" style="background-image: url({{ asset('/') }}frontEnd/assets/images/hero/hero-5-bg-2.jpg)">
                                    <div class="row align-items-center justify-content-between">

                                        <!-- Hero Content -->
                                        <div class="hero-content-five col">

                                            <img src="{{ asset('/') }}frontEnd/assets/images/hero/home-5-offer.png" alt="Offer">
                                            <h2>CHOOSE YOUR HOME</h2>
                                            <h1>APPLIANCES</h1>
                                            <a href="#">get it now</a>

                                        </div>

                                    </div>
                                </div><!-- Hero Item End -->

                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-37.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-39.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-37.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-38.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-39.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-37.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-38.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-3 col-md-4 col-12 px-0"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-39.jpg" alt="Banner"></a></div></div>
                        </div>

                    </div><!-- Hero Slider End -->
                    <!-- Hero Banner Start -->
                    <div class="hero-banner">
                        <div class="row row-5">

                            <div class="col-lg-12 col-md-6 col-12 mb-10"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner"></a></div></div>
                            <div class="col-lg-12 col-md-6 col-12 mb-10"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a></div></div>

                        </div>
                    </div><!-- Hero Banner End -->

                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->


    <!-- New Arrival Product Section Start -->
    <div class="product-section section mb-60">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="NEW ARRIVAL"><h1>NEW ARRIVAL</h1></div>
                </div><!-- Section Title End -->

                <div class="col-12">
                    <div class="row">

                        <div class="col-xl-9 col-lg-8 col-12">
                            <div class="row pt-10">

                                <div class="col-xl-4 col-md-6 col-12 pb-1">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-16.png" alt="Product Image" class="height-235"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title-two">

                                                <a href="#" class="cat">Tv & Audio</a>
                                                <h5 class="title"><a href="{{ route('singleProduct') }}">Nexo Andriod TV Box</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting-two">

                                                <h5 class="price"><span class="old">Tk 360 </span>Tk 250.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-1">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label new">new</span>

                                            <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-17.png" alt="Product Image" class="height-235"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title-two">

                                                <a href="#" class="cat">Smartphone</a>
                                                <h5 class="title"><a href="{{ route('singleProduct') }}">Ornet Note 9</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting-two">

                                                <h5 class="price"><span class="old">Tk 285</span>Tk 230.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-1">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="{{ route('singleProduct') }}" class="img "><img src="{{ asset('/') }}frontEnd/assets/images/product/product-18.png" alt="Product Image" class="height-235"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title-two">

                                                <a href="#" class="cat">Tv & Audio</a>
                                                <h5 class="title"><a href="{{ route('singleProduct') }}">Xonet Speaker P 9</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting-two">

                                                <h5 class="price">Tk 185.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-12 mb-25 mt-5">
                            <div class="row">

                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-17.jpg" alt="Banner"></a></div></div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- New Arrival Product Section End -->

    <<!-- Feature Product Section Start -->
    <div class="product-section section mb-70">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="FEATURED ITEMS"><h1>FEATURED ITEMS</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Filter Start -->
                <div class="col-12 mb-30">
                    <div class="product-tab-filter">

                        <!-- Tab Filter Toggle -->
                        <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>

                    </div>
                </div><!-- Product Tab Filter End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">
                    <div class="tab-content">
                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade show active" id="tab-one">

                            <!-- Product Slider Wrap Start -->
                            <div class="product-slider-wrap product-slider-arrow-one">
                                <!-- Product Slider Start -->
                                <div class="product-slider product-slider-4">
                                    @foreach($featureItems as $featureItem)
                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">
                                                <span class="label sale">{{ $featureItem->promotion }}</span>
                                                <a href="{{ route('singleProductView',['id' => $featureItem->id]) }}" class="img"><img src="{{ $featureItem->image }}" alt="Product Image" class="height-235"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Wishlist" onclick="addToCartWishlist({{$featureItem->id}})"><i class="ti-heart"></i></a>
                                                </div>
                                                <a href="#" class="add-to-cart"
                                                   onclick="addToCartShopping({{$featureItem->id}})">
                                                    <i class="ti-shopping-cart"></i>
                                                    <span>ADD TO CART</span>
                                                </a>


                                                <input type="hidden" id="{{$featureItem->id}}product_id" name="id" value="{{$featureItem->id}}">
                                                <input type="hidden" id="{{$featureItem->id}}qty" name="quantity" value="1">
                                                <input type="hidden" id="{{$featureItem->id}}color" name="color" value="Default">

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title-two">

                                                    <a href="#" class="cat">{{ $featureItem->Subcategories->sub_category_name }}</a>
                                                    <h5 class="title"><a href="{{ route('singleProduct') }}">{{ $featureItem->product_name }}</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting-two">

                                                    <h5 class="price">TK. {{ $featureItem->price }}</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>
                                    @endforeach

                                </div><!-- Product Slider End -->
                            </div><!-- Product Slider Wrap End -->

                        </div><!-- Tab Pane End -->

                    </div>
                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Feature Product Section End -->

    <!-- Best Deals Product Section Start -->
    <div class="product-section section mb-40">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="BEST DEALS"><h1>BEST DEALS</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Filter Start-->
                <div class="col-12">
                    <div class="offer-product-wrap row">

                        <!-- Product Tab Filter Start -->
                        <div class="col mb-30">
                            <div class="product-tab-filter">
                                <!-- Tab Filter Toggle -->
                                <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>


                            </div>
                        </div><!-- Product Tab Filter End -->

                        <!-- Offer Time Wrap Start -->
                        <div class="col mb-30">
                            <div class="offer-time-wrap-two" style="background-image: url({{ asset('/') }}frontEnd/assets/images/bg/offer-products.jpg)">
                                <h1><span>UP TO</span> 55%</h1>
                                <h3>QUALITY & EXCLUSIVE <span>PRODUCTS</span></h3>
                                <h4><span>LIMITED TIME OFFER</span> GET YOUR PRODUCT</h4>
                                <div class="countdown" data-countdown="2019/06/20"></div>
                            </div>
                        </div><!-- Offer Time Wrap End -->

                        <!-- Product Tab Content Start -->
                        <div class="col-12 mb-30">
                            <div class="tab-content">
                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade show active" id="tab-three">

                                    <!-- Product Slider Wrap Start -->
                                    <div class="product-slider-wrap product-slider-arrow-two">
                                        <!-- Product Slider Start -->
                                        <div class="product-slider product-slider-3">

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-13.png" alt="Product Image" class="height-235"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title-two">

                                                            <a href="#" class="cat">Games</a>
                                                            <h5 class="title"><a href="{{ route('singleProduct') }}">Game Stations PW 25</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting-two">

                                                            <h5 class="price"><span class="old">Tk 285</span>Tk 135.35</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-14.png" alt="Product Image" class="height-235"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title-two">

                                                            <a href="#" class="cat">Kitchen Appliances</a>
                                                            <h5 class="title"><a href="{{ route('singleProduct') }}">Zorex Coffe Maker</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting-two">

                                                            <h5 class="price">Tk 125.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-15.png" alt="Product Image" class="height-235"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title-two">

                                                            <a href="#" class="cat">Home Appliances</a>
                                                            <h5 class="title"><a href="{{ route('singleProduct') }}">jeilips Steam Iron K 2</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting-two">

                                                            <h5 class="price"><span class="old">Tk 365</span>Tk 295.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-16.png" alt="Product Image" class="height-235"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title-two">

                                                            <a href="#" class="cat">Tv & Audio</a>
                                                            <h5 class="title"><a href="{{ route('singleProduct') }}">Nexo Andriod TV Box</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting-two">

                                                            <h5 class="price"><span class="old">Tk 360 </span>Tk 250.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label new">new</span>

                                                        <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-17.png" alt="Product Image" class="height-235"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title-two">

                                                            <a href="#" class="cat">Smartphone</a>
                                                            <h5 class="title"><a href="{{ route('singleProduct') }}">Ornet Note 9</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting-two">

                                                            <h5 class="price"><span class="old">Tk 285</span>Tk 230.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                        </div><!-- Product Slider End -->
                                    </div><!-- Product Slider Wrap End -->

                                </div><!-- Tab Pane End -->

                            </div>
                        </div><!-- Product Tab Content End -->

                    </div>
                </div><!-- Product Tab Filter End-->

            </div>
        </div>
    </div><!-- Best Deals Product Section End -->

    <!-- Banner Section Start -->
    <div class="banner-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Banner -->
                <div class="col-12">
                    <div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-10.png" alt="Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->

    <!-- Best Sell Product Section Start -->
    <div class="product-section section mb-60">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="BEST SELLER"><h1>BEST SELLERS</h1></div>
                </div><!-- Section Title End -->

                <div class="col-12">
                    <div class="row ">

                        <div class="col-xl-3 col-lg-4 col-12 order-lg-1 order-2 mb-25 mt-5">
                            <div class="row">

                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a></div></div>

                            </div>
                        </div>

                        <div class="col-xl-9 col-lg-8 col-12 order-lg-2 order-1">
                            <div class="row pt-10">

                                <div class="col-xl-4 col-md-6 col-12 pb-2 ">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-5.png" alt="Product Image" class="height-235"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title-two">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="{{ route('singleProduct') }}">Mony Handycam Z 105</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting-two">

                                                <h5 class="price">Tk 110.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-2 ">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-4.png" alt="Product Image" class="height-235"></a>
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title-two">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="{{ route('singleProduct') }}">Axor Digital camera</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting-two">

                                                <h5 class="price"><span class="old">Tk 265</span>Tk 199.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4  col-md-6 col-12 pb-2 ">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="{{ route('singleProduct') }}" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-7.png" alt="Product Image" class="height-235"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title-two">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="{{ route('singleProduct') }}">Silvex DSLR Camera T 32</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting-two">

                                                <h5 class="price">Tk 580.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Best Sell Product Section End -->


    <!--Recently viewed Product start-->
    <section class="product-section section mb-30">
        <div class="container">
            <div class="row">
                <h3>Recently Viewed Products</h3>
            </div>
            <div class="row">
                <div class="col-md-3 col-12 pl-0 pr-1 my-1">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-22.jpg" alt="Banner" style="height: 172.083px"></a>
                    </div>
                </div>
                <div class="col-md-3 col-12 pl-1 pr-1 my-1">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-23.jpg" alt="Banner" style="height: 172.083px"></a>
                    </div>
                </div>
                <div class="col-md-3 col-12 pl-1 pr-1 my-1">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-22.jpg" alt="Banner" style="height: 172.083px"></a>
                    </div>
                </div>
                <div class="col-md-3 col-12 pl-1 pr-0  my-1">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-23.jpg" alt="Banner" style="height: 172.083px"></a>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 pr-1 pl-0">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner" style="height: 160.4px"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-13.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-17.jpg" alt="Banner"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-13.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 pr-0 pl-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner" style="height: 160.4px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-1">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 pr-1 pl-0">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-13.jpg" alt="Banner" style="height: 160.4px"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-12.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-13.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-11.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <div class="col-md-3 pr-0 pl-1">
                            <div class="banner">
                                <a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/banner-17.jpg" alt="Banner" style="height: 160.4px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Recently viewed Product End-->

    <!-- Brands Section Start -->
    <div class="brands-section section mb-30">
        <div class="container">
            <div class="row">
                <h4><span>Top Stories : </span><span>Brand Directory</span></h4>
                <p>
                <div><b>Most searched for on G&P:</b><!-- -->
                    <a href="#"> <!-- -->Google Pixel 3A</a>|
                    <a href="#"> <!-- -->Google Pixel 3A XL</a> |
                    <a href="#"> <!-- -->Realme 3 Pro</a> |
                    <a href="#"> <!-- -->Realme C2</a> |
                    <a href="#"> <!-- -->Fitbit Inspire HR</a> |
                    <a href="#"> <!-- -->Fitbit Versa Lite</a> |
                    <a href="#"> <!-- -->Akshaya Tritiya Offers</a> |
                    <a href="#"> <!-- -->Fitbit Inspire</a> |
                    <a href="#"> <!-- -->Vivo V15</a> |
                    <a href="#"> <!-- -->Redmi Go</a> |
                    <a href="#"> <!-- -->Redmi note 7 pro</a> |
                    <a href="#"> <!-- -->Realme 3</a> |
                    <a href="#"> <!-- -->DIR-819 Router</a> |
                    <a href="#"> <!-- -->Redmi Note 7</a> |
                    <a href="#"> <!-- -->Microsoft Surface Go</a> |
                    <a href="#"> <!-- -->IPL T-shirts</a> |
                    <a href="#"> <!-- -->Redmi Note 6 Pro</a>
                </div><br/><br/>
                <div class="my-2"><b>Most searched for on G&P:</b><!-- -->
                    <a href="#"> <!-- -->Google Pixel 3A</a>|
                    <a href="#"> <!-- -->Google Pixel 3A XL</a> |
                    <a href="#"> <!-- -->Realme 3 Pro</a> |
                    <a href="#"> <!-- -->Realme C2</a> |
                    <a href="#"> <!-- -->Fitbit Inspire HR</a> |
                    <a href="#"> <!-- -->Fitbit Versa Lite</a> |
                    <a href="#"> <!-- -->Akshaya Tritiya Offers</a> |
                    <a href="#"> <!-- -->Fitbit Inspire</a> |
                    <a href="#"> <!-- -->Vivo V15</a> |
                    <a href="#"> <!-- -->Redmi Go</a> |
                    <a href="#"> <!-- -->Redmi note 7 pro</a> |
                    <a href="#"> <!-- -->Realme 3</a> |
                    <a href="#"> <!-- -->DIR-819 Router</a> |
                    <a href="#"> <!-- -->Redmi Note 7</a> |
                    <a href="#"> <!-- -->Microsoft Surface Go</a> |
                    <a href="#"> <!-- -->IPL T-shirts</a> |
                    <a href="#"> <!-- -->Redmi Note 6 Pro</a>
                </div><br/>
                <div><b>Most searched for on G&P:</b><!-- -->
                    <a href="#"> <!-- -->Google Pixel 3A</a>|
                    <a href="#"> <!-- -->Google Pixel 3A XL</a> |
                    <a href="#"> <!-- -->Realme 3 Pro</a> |
                    <a href="#"> <!-- -->Realme C2</a> |
                    <a href="#"> <!-- -->Fitbit Inspire HR</a> |
                    <a href="#"> <!-- -->Fitbit Versa Lite</a> |
                    <a href="#"> <!-- -->Akshaya Tritiya Offers</a> |
                    <a href="#"> <!-- -->Fitbit Inspire</a> |
                    <a href="#"> <!-- -->Vivo V15</a> |
                    <a href="#"> <!-- -->Redmi Go</a> |
                    <a href="#"> <!-- -->Redmi note 7 pro</a> |
                    <a href="#"> <!-- -->Realme 3</a> |
                    <a href="#"> <!-- -->DIR-819 Router</a> |
                    <a href="#"> <!-- -->Redmi Note 7</a> |
                    <a href="#"> <!-- -->Microsoft Surface Go</a> |
                    <a href="#"> <!-- -->IPL T-shirts</a> |
                    <a href="#"> <!-- -->Redmi Note 6 Pro</a>
                </div>
                </p>
            </div>
        </div>
    </div><!-- Brands Section End -->

    <!-- Feature Section Start -->
    <div class="feature-section section mb-10">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-10 pr-1">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/') }}frontend/assets/images/icons/feature-walet-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/') }}frontEnd/assets/images/icons/feature-walet-2.png" alt="Feature"></div>
                            <h4>Great Value</h4>
                            <p>We offer competitive prices on our 100 million plus product range.</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-10 px-sm-1 pl-1">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/') }}frontend/assets/images/icons/feature-van-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/') }}frontEnd/assets/images/icons/feature-van-2.png" alt="Feature"></div>
                            <h4>Worldwide Delivery</h4>
                            <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-10 px-md-1 pr-1">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/') }}frontend/assets/images/icons/credit.png)">
                        <div class="feature-wrap">
                            <div class="icon"><i class="fa fa-2x fa-credit-card"></i></div>
                            <h4>Safe Payment</h4>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-10 px-md-1 pl-1">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/') }}frontend/assets/images/icons/feature-shield-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/') }}frontEnd/assets/images/icons/feature-shield-2.png" alt="Feature"></div>
                            <h4>Shop with Confidence</h4>
                            <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-10 px-sm-1 pl-1">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/') }}frontend/assets/images/icons/feature-support-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/') }}frontEnd/assets/images/icons/feature-support-2.png" alt="Feature"></div>
                            <h4>24/7 Help Center</h4>
                            <p>Round-the-clock assistance for a smooth shopping experience.</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-10 px-md-1 pl-1">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/') }}frontend/assets/images/icons/feature-shield-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon" style="font-size: 25px"><img src="{{ asset('/') }}frontEnd/assets/images/icons/apps.png" alt="Feature"></div>
                            <h4>Shop On-The-Go</h4>
                            <p>Download the app and get the world of product at your fingertips.</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->


@endsection