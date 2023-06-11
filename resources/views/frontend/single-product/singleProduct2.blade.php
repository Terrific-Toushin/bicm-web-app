@extends('frontend.master')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Product Details</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Product Details</a></li>
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

    <!--product Category Menu start-->

    <section class="section">
        <div class="container">
            <div class="row mt-30">
                <ul>
                    <li class="float-left font-weight-bold"><a href="#" >Home</a></li>
                    <li class="float-left mx-2 mt-cs-1"><span><i class="ti-angle-double-right"></i></span></li>
                    <li class="float-left mx-2 font-weight-bold"><a href="#" >{{ $singleProduct->Category->category_name }}</a></li>
                    <li class="float-left mx-2 mt-cs-1"><span><i class="ti-angle-double-right"></i></span></li>
                    <li class="float-left font-weight-bold"><a href="#" >{{ $singleProduct->Subcategories->sub_category_name }}</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--product Category Menu end-->

    <!-- Single Product Section Start -->
    <div class="product-section section mt-40 mb-90">
        <div class="container">

            <div class="row mb-40">

                <div class="col-lg-6 col-12 mb-50">

                    <!-- Image -->
                    <div class="single-product-image thumb-left">

                        <div class="tab-content">
                            @php($i=1)
                            @foreach($images as $image)
                                @if($i==1)
                                    <div id="single-image-{{$i}}" class="tab-pane fade show active ">
                                        <div class=""><a href="{{asset($image->product_image1)}}" class=""><img id="img_{{$i}}" src="{{asset($image->product_image1)}}" data-zoom-image="{{asset($image->product_image1)}}" alt="Big Image" class="w-100"></a></div>
                                    </div>
                                    @else
                                    <div id="single-image-{{$i}}" class="tab-pane fade show">
                                        <div class=""><a href="{{asset($image->product_image1)}}" class=""><img id="img_{{$i}}" src="{{asset($image->product_image1)}}" data-zoom-image="{{asset($image->product_image1)}}" alt="Big Image" class="w-100"></a></div>
                                    </div>
                                @endif
                                @php($i++)
                            @endforeach
                        </div>

                        <div class="thumb-image-slider nav" data-vertical="true">
                            @php($i=1)
                            @foreach($images as $image)
                                @if($i==1)
                                    <a class="thumb-image active" data-toggle="tab" href="#single-image-{{$i}}"><img src="{{asset($image->product_image1)}}" alt="Thumbnail Image" class="w-100"></a>
                                @else
                                    <a class="thumb-image" data-toggle="tab" href="#single-image-{{$i}}"><img src="{{asset($image->product_image1)}}" alt="Thumbnail Image" class="w-100"></a>
                                @endif
                                @php($i++)
                            @endforeach
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 col-12 mb-50">

                    <!-- Content -->
                    <div class="single-product-content">

                        <!-- Category & Title -->
                        <div class="head-content">

                            <div class="category-title">
                                <a href="#" class="cat">{{ $singleProduct->Subcategories->sub_category_name }}</a>
                                <h5 class="title">{{ $singleProduct->product_name }}</h5>
                            </div>

                            <h5 class="price"><span class="old strikeout">{{ $singleProduct->newPrice ? $singleProduct->price.' TK':'' }} </span>{{ $singleProduct->newPrice ? $singleProduct->newPrice:$singleProduct->price }} TK</h5>

                        </div>

                        <div class="single-product-description">

                            <div class="ratting">
                                @for($i=1;$i<=$singleProduct->ratings;$i++)
                                <i class="fa fa-star"></i>
                                @endfor
                                <i class="fa fa-star-o"></i>
                            </div>

                            <div class="desc">
                                <p>{{ $singleProduct->description }}</p>
                            </div>

                            <span class="availability">Availability: <span>{{ $singleProduct->quantity>=1 ? 'In Stock':'Out of Stock' }}</span></span>
                            <input type="hidden" id="{{$singleProduct->id}}product_id" name="id" value="{{$singleProduct->id}}">
                            <div class="quantity-colors">

                                <div class="quantity">
                                    <h5>Quantity</h5>
                                    <div class="pro-qty"><input id="{{$singleProduct->id}}qty" type="number" value="1" max="{{$singleProduct->quantity}}" min="1"></div>
                                </div>

                                <div class="colors">
                                    <h5>Color</h5>
                                    <select id="{{$singleProduct->id}}color" class="nice-select">
                                        @php($colors = explode(',', $singleProduct->colors))
                                        @foreach($colors as $color)
                                        <option>{{$color}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="actions">

                                <a href="" class="add-to-cart"
                                   onclick="addToCartShopping({{$singleProduct->id}})">
                                    <i class="ti-shopping-cart"></i><span>ADD TO CART</span>
                                </a>
                                <a href="login.html" class="add-to-buy"><i class="ti-shopping-cart-full"></i><span>Buy Now</span></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                            </div>

                            <div class="tags">
                                <h5>Tags:</h5>
                                @php($tags = explode(',', $singleProduct->tags))
                                @foreach($tags as $tag)
                                    <a href="#">{{$tag}}</a>
                                @endforeach
                            </div>

                            <div class="share">

                                <h5>Share: </h5>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <ul class="single-product-tab-list nav">
                        <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                        <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                        <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                    </ul>

                    <div class="single-product-tab-content tab-content">
                        <div class="tab-pane fade show active" id="product-description">

                            <div class="row">
                                <div class="single-product-description-content col-lg-8 col-12">
                                    <h4>Introducing {{$singleProduct->product_name}}</h4>
                                    <p>{{$singleProduct->description}}</p>
                                </div>
                                <div class="single-product-description-image col-lg-4 col-12">
                                    <img src="{{ asset($singleProduct->image) }}" style="height: 150px" alt="description">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="product-specifications">
                            <div class="single-product-specification">
                                <table class="table-cs" border="2" style="width: 100%">
                                    <col style="width: 20%">
                                    <col style="width: 80%">
                                    <tr class="table-cs" style="">
                                        <th>Name</th>
                                        <td>{{$singleProduct->product_name}}</td>
                                    </tr>
                                    <tr class="table-cs" style="">
                                        <th>skin</th>
                                        <td>{{$specification->skin}}</td>
                                    </tr>
                                    <tr class="table-cs" style="">
                                        <th>weight</th>
                                        <td>{{$specification->weight}}</td>
                                    </tr>
                                    <tr class="table-cs" style="">
                                        <th>size</th>
                                        <td>{{$specification->size}}</td>
                                    </tr>
                                    <tr class="table-cs" style="">
                                        <th>speciality</th>
                                        <td>{{$specification->speciality}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-reviews">
                            <div class="product-ratting-wrap">
                                <div class="pro-avg-ratting">
                                    <h4>4.5 <span>(Overall)</span></h4>
                                    <span>Based on 9 Comments</span>
                                </div>
                                <div class="ratting-list">
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(3)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(1)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(0)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(0)</span>
                                    </div>
                                </div>
                                <div class="rattings-wrapper">

                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>Cristopher Lee</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>
                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>Nirob Khan</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>
                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>MD.ZENAUL ISLAM</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper fix">
                                    <h3>Add your Comments</h3>
                                    <form action="#">
                                        <div class="ratting-form row">
                                            <div class="col-12 mb-15">
                                                <h5>Rating:</h5>
                                                <div class="ratting-star fix">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12 mb-15">
                                                <label for="name">Name:</label>
                                                <input id="name" placeholder="Name" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-15">
                                                <label for="email">Email:</label>
                                                <input id="email" placeholder="Email" type="text">
                                            </div>
                                            <div class="col-12 mb-15">
                                                <label for="your-review">Your Review:</label>
                                                <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <input value="add review" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div><!-- Single Product Section End -->

    <!-- Related Product Section Start -->
    <div class="product-section section mb-70">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="RELATED PRODUCT"><h1>RELATED PRODUCT</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">

                    <!-- Product Slider Wrap Start -->
                    <div class="product-slider-wrap product-slider-arrow-one">
                        <!-- Product Slider Start -->
                        <div class="product-slider product-slider-4">

                            <div class="col pb-20 pt-10">
                                <!-- Product Start -->
                                <div class="ee-product">

                                    <!-- Image -->
                                    <div class="image">

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-1.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Laptop</a>
                                            <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$295.00</h5>
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

                            <div class="col pb-20 pt-10">
                                <!-- Product Start -->
                                <div class="ee-product">

                                    <!-- Image -->
                                    <div class="image">

                                        <span class="label sale">sale</span>

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-2.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Drone</a>
                                            <h5 class="title"><a href="single-product.html">Aquet Drone D 420</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price"><span class="old">$350</span>$275.00</h5>
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

                            <div class="col pb-20 pt-10">
                                <!-- Product Start -->
                                <div class="ee-product">

                                    <!-- Image -->
                                    <div class="image">

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-3.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Games</a>
                                            <h5 class="title"><a href="single-product.html">Game Station X 22</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$295.00</h5>
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

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-4.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Accessories</a>
                                            <h5 class="title"><a href="single-product.html">Roxxe Headphone Z 75</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$110.00</h5>
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

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-5.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Camera</a>
                                            <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$110.00</h5>
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

                        </div><!-- Product Slider End -->
                    </div><!-- Product Slider Wrap End -->

                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Related Product Section End -->

    <!-- Related Product Section Start -->
    <div class="product-section section mb-70">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="TOP SALES PRODUCT"><h1>TOP SALES PRODUCT</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">

                    <!-- Product Slider Wrap Start -->
                    <div class="product-slider-wrap product-slider-arrow-one">
                        <!-- Product Slider Start -->
                        <div class="product-slider product-slider-4">

                            <div class="col pb-20 pt-10">
                                <!-- Product Start -->
                                <div class="ee-product">

                                    <!-- Image -->
                                    <div class="image">

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-1.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Laptop</a>
                                            <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$295.00</h5>
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

                            <div class="col pb-20 pt-10">
                                <!-- Product Start -->
                                <div class="ee-product">

                                    <!-- Image -->
                                    <div class="image">

                                        <span class="label sale">sale</span>

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-2.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Drone</a>
                                            <h5 class="title"><a href="single-product.html">Aquet Drone D 420</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price"><span class="old">$350</span>$275.00</h5>
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

                            <div class="col pb-20 pt-10">
                                <!-- Product Start -->
                                <div class="ee-product">

                                    <!-- Image -->
                                    <div class="image">

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-3.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Games</a>
                                            <h5 class="title"><a href="single-product.html">Game Station X 22</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$295.00</h5>
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

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-4.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Accessories</a>
                                            <h5 class="title"><a href="single-product.html">Roxxe Headphone Z 75</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$110.00</h5>
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

                                        <a href="single-product.html" class="img"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-5.png" alt="Product Image"></a>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="category-title">

                                            <a href="#" class="cat">Camera</a>
                                            <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                        </div>

                                        <!-- Price & Ratting -->
                                        <div class="price-ratting">

                                            <h5 class="price">$110.00</h5>
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

                        </div><!-- Product Slider End -->
                    </div><!-- Product Slider Wrap End -->

                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Related Product Section End -->

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

@section('customScript')
    <script>
        var i = 1;
        for (i=1;i<4;i++){
            $("#img_"+i).elevateZoom();
        }
    </script>
@endsection