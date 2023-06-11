<!--Add section start-->
<div class="page-banner-wrap row row-0 d-flex align-items-center ">

    <!-- Page Banner -->
    <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
        <div class="page-banner">
            <h1>Banner Style</h1>
            <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('/')}}">HOME</a></li>
                    <li><a href="#">Banner Style</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="col-lg-4 col-md-6 col-12 order-lg-1">
        <div class="banner banner-height-91"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/upper-add-1.jpg" alt="Banner"></a></div>
    </div>

    <!-- Banner -->
    <div class="col-lg-4 col-md-6 col-12 order-lg-3">
        <div class="banner banner-height-91"><a href="#"><img src="{{ asset('/') }}frontEnd/assets/images/banner/upper-add-2.jpg" alt="Banner"></a></div>
    </div>

</div>
<!--add section End-->

<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-two header-top-border">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col ">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <p class="text-white hotline">Hotline : <b>+88 123 45 67 89 00</b> &nbsp;&nbsp;( 9 AM to 12 AM - Everyday )</p>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-2 order-xs-2 order-md-12">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        <a href="{{ route('home') }}"><span class="d-block text-white"><i class="fa fa-home"></i> Home</span></a>
                        <a href="#"><span class="d-block text-white">|</span></a>
                        <a href="#"><span class="d-block text-white">How to Buy</span></a>
                        <a href="#"><span class="d-block text-white">|</span></a>
                        <a href="#"><span class="d-block text-white">Cash on Delivery</span></a>
                        <a href="#"><span class="d-block text-white">|</span></a>
                        <a href="#"><span class="d-block text-white">Easy Replacement</span></a>
                        <a href="#"><span class="d-block text-white">|</span></a>
                        <a href="#"><span class="d-block text-white">Seller Corner</span></a>
                        <a href="#"><span class="d-block text-white">|</span></a>
                        <a href="#"><span class="d-block text-white">eStore</span></a>
                        <a href="#"><span class="d-block text-white">|</span></a>
                        <a href="#"><span class="d-block text-white">Contact</span></a>
                    </div><!-- Header Account Links End -->
                </div>

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Top Start -->
    <div class="header-bottom header-bottom-two header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between pb-0">

                <div class="col">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="{{route('/')}}">
                            <img src="{{ asset('/') }}frontEnd/assets/images/logo.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class="header-advance-search">

                        <form action="#">
                            <div class="input"><input type="text" placeholder="Search your product"></div>
                            <div class="select">
                                <select class="nice-select">
                                    <option>All Categories</option>
                                    <option>Mobile</option>
                                    <option>Computer</option>
                                    <option>Laptop</option>
                                    <option>Camera</option>
                                </select>
                            </div>
                            <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                        </form>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-2 order-lg-12 order-xl-12">
                    <div class="row justify-content-between align-items-center">

                        <div class="col">
                            <!-- Header Shop Links Start -->
                            <div class="header-shop-links">
                                <!-- Cart -->
                                @if(Session::get('client_id'))
                                    <a href="{{ route('clientDashboard') }}" class=""><span class="" style="position: relative;left: 0px;"></span></a><span class="" style="position: relative;left: 365px;top: 15px;">My Account</span>
                                    <a href="{{ route('clientDashboard') }}" class=""><i class="ti-user"></i><span class="">{{ Session::get('client_name') }}</span> &nbsp;&nbsp; </a>
                                @else
                                    <a href="{{ route('clientRegister') }}" class=""><span class="" style="position: relative;left: 0px;">REGISTER</span></a><span class="" style="position: relative;left: 365px;top: 15px;">My Account</span>
                                    <a href="{{ route('clientLogin') }}" class=""><i class="ti-user"></i><span class="">SIGN IN</span> &nbsp;&nbsp;| </a>
                                @endif
                                <a href="cart.html" class=" mr-md-3"><i class="ti-heart"></i><span class="number">3</span></a><span class="" style="position: relative;left: 40%;top: 15px;">wish</span>
                                <a href="cart.html" class="header-cart mr-md-3"><i class="ti-shopping-cart"></i><span class="number" id="cartQuantity">{{$cartQuantity}}</span></a><span class="" style="position: relative;left: 16%;top: 15px;">cart</span>


                            </div><!-- Header Shop Links End -->
                        </div>

                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>

            <div class="row align-items-center justify-content-between">

                <div class="col mx-auto">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="active menu-item-has-children"><a href="#">All Categories</a>
                                    <ul class="mega-menu three-column">
                                        @foreach($categories as $category)
                                        <li><a href="#">{{ $category->category_name }}</a>
                                            <ul>
                                                @foreach($subcategories as  $subcategory)
                                                    @if($subcategory->category_id == $category->id)
                                                    <li><a href="about-us.html">{{ $subcategory->sub_category_name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="active menu-item-has-children"><a href="index.html">MEN</a></li>
                                <li class="active menu-item-has-children"><a href="index.html">WOMEN</a></li>
                                <li class="active menu-item-has-children"><a href="index.html">KIDS</a></li>
                                <li class="active menu-item-has-children"><a href="index.html">ELECTRONICS</a></li>
                                <li class="menu-item-has-children"><a href="shop-grid.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="shop-grid.html">shop grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.html">shop grid</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">shop grid Left Sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">shop grid Right Sidebar</a></li>
                                                <li><a href="shop-grid-extended.html">shop grid Extended</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="shop-list.html">shop List</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list.html">shop List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="category-1.html">shop Category</a>
                                            <ul class="sub-menu">
                                                <li><a href="category-1.html">Shop Category 1</a></li>
                                                <li><a href="category-2.html">Shop Category 2</a></li>
                                                <li><a href="category-3.html">Shop Category 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="single-product.html">Single Product</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product 1</a></li>
                                                <li><a href="single-product-2.html">Single Product 2</a></li>
                                                <li><a href="single-product-3.html">Single Product 3</a></li>
                                                <li><a href="single-product-4.html">Single Product 4</a></li>
                                                <li><a href="single-product-5.html">Single Product 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="mega-menu three-column">
                                        <li><a href="#">Column One</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="banner.html">Banner</a></li>
                                                <li><a href="best-deals.html">Best Deals</a></li>
                                                <li><a href="buttons.html">Buttons</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="clients.html">Clients</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Two</a>
                                            <ul>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="feature.html">Feature</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="store.html">Store</a></li>
                                                <li><a href="tabs.html">Tabs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Three</a>
                                            <ul>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog-3-column.html">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-1-column-left-sidebar.html">Blog 1 Column Left Sidebar</a></li>
                                        <li><a href="blog-1-column-right-sidebar.html">Blog 1 Column Right Sidebar</a></li>
                                        <li><a href="blog-2-column-left-sidebar.html">Blog 2 Column Left Sidebar</a></li>
                                        <li><a href="blog-2-column-right-sidebar.html">Blog 2 Column Right Sidebar</a></li>
                                        <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                        <li><a href="single-blog-left-sidebar.html">Single Blog Left Sidebar</a></li>
                                        <li><a href="single-blog-right-sidebar.html">Single Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>

        </div>
    </div><!-- Header Top End -->

</div><!-- Header Section End -->

<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">

        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-1.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: Tk 295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-2.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: Tk 275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{ asset('/') }}frontEnd/assets/images/product/product-3.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Game Station X 22</a>
                <span class="price">Price: Tk 295</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">

        <h4 class="sub-total">Total: <span>Tk 1160</span></h4>

        <div class="button">
            <a href="checkout.html">CHECK OUT</a>
        </div>

    </div>

</div><!-- Mini Cart Wrap End -->

