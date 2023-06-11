@extends('frontend.master')

@section('content')
    <div class="cart-overlay"></div>

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Checkout</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-1">
                <div class="banner"><a href="#"><img src="{{asset('/front')}}/assets/images/banner/banner-15.jpg" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-3">
                <div class="banner"><a href="#"><img src="{{asset('/front')}}/assets/images/banner/banner-14.jpg" alt="Banner"></a></div>
            </div>

        </div>
    </div><!-- Page Banner Section End -->

    <!-- Checkout Page Start -->
    <div class="page-section section mt-90 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form id="finalSubmit" action="{{route('finalSubmit')}}" method="post" class="checkout-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-40">

                            <div class="col-lg-7 mb-20">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Shipping Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                            <input type="text" name="firstName" placeholder="First Name" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            <input type="text" name="lastName" placeholder="Last Name" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input type="email" name="email" placeholder="Email Address" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" name="mobile" placeholder="Phone number" required>
                                        </div>

                                        {{--<div class="col-12 mb-20">--}}
                                        {{--<label>Company Name</label>--}}
                                        {{--<input type="text" placeholder="Company Name">--}}
                                        {{--</div>--}}

                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input type="text" name="address" placeholder="Address line 1" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select class="nice-select" >
                                                <option>Bangladesh</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>District</label>
                                            <input type="text" name="district" placeholder="Town/City" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Post Office Name</label>
                                            <input type="text" name="psName" placeholder="State" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input type="text" name="zip" placeholder="Zip Code" required>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>
                                            @php($cartProducts = Cart::instance('shopping')->content())
                                            @php($totalprice = 0)
                                            <ul>
                                                @foreach( $cartProducts as $cartProduct )
                                                    <li>{{ $cartProduct->name }} <span>{{ $cartProduct->subtotal }}</span></li>

                                                    @php($totalprice = $totalprice+$cartProduct->subtotal)
                                                @endforeach
                                            </ul>

                                            <p>Sub Total <span>BDT {{$totalprice}}</span></p>
                                            <p>Shipping Fee <span>BDT 100</span></p>

                                            <h4>Grand Total <span>BDT {{$totalprice+100}}</span></h4>
                                            @php(Session::put('totatPrice',$totalprice))

                                        </div>

                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Payment Method</h4>

                                        <div class="checkout-payment-method">

                                            <div class="single-method">
                                                <input type="radio" id="payment_cash" name="paymentMethod" value="cash on delivery" required>
                                                <label for="payment_cash">Cash on Delivery</label>
                                            </div>

                                            <div class="single-method">
                                                <input type="radio" id="BKASH" name="paymentMethod" value="BKASH"  required>
                                                <label for="BKASH">BKASH</label>
                                            </div>

                                            <div class="single-method">
                                                <input type="checkbox" id="accept_terms"  required>
                                                <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <input type="submit" value="Place order" class="btn btn place-order">
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Page End -->
@endsection