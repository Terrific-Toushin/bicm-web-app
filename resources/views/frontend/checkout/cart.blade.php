@extends('frontend.master')

@section('content')
    <!-- Cart Overlay -->
    <div class="cart-overlay"></div>

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Cart</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- Page Banner Section End -->

    <!-- Cart Page Start -->
    <div class="page-section section pt-90 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Name</th>
                                    <th class="pro-color">Color</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @php($totalprice = 0)
                                    @foreach( $cartProducts as $cartProduct )
                                        <td class="pro-thumbnail"><a href="#"><img src="{{asset($cartProduct->options->image)}}" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">{{ $cartProduct->name }}</a></td>
                                        <td class="pro-price"><span>{{ $cartProduct->options->color }}</span></td>
                                        <td class="pro-price"><span>{{ $cartProduct->price }}</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="number" max="5" min="1" value="{{$cartProduct->qty}}"></div></td>
                                        <td class="pro-subtotal"><span>{{ $cartProduct->subtotal }}</span></td>
                                        <td class="pro-remove"><a href="#"
                                                                  onclick="event.preventDefault();
                                        document.getElementById('removeCart-form').submit();">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                            <form id="removeCart-form" action="{{ route('removeCart') }}" method="POST" style="">
                                                @csrf
                                                <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}">
                                            </form>
                                        </td>
                                </tr>
                                @php($totalprice = $totalprice+$cartProduct->subtotal)
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </form>

                    <div class="row">

                        <div class="col-lg-6 col-12 mb-15">
                            <!-- Calculate Shipping -->
                        {{--<div class="calculate-shipping">--}}
                        {{--<h4>Calculate Shipping</h4>--}}
                        {{--<form action="#">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-12 mb-25">--}}
                        {{--<select class="nice-select">--}}
                        {{--<option>Dhaka</option>--}}
                        {{--<option>Rangpur</option>--}}
                        {{--<option>Mymensingh</option>--}}
                        {{--<option>Barisal</option>--}}
                        {{--<option>Khulna</option>--}}
                        {{--<option>Comilla</option>--}}
                        {{--<option>Chittagong</option>                                        </select>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 col-12 mb-25">--}}
                        {{--<input type="text" name="district" placeholder="district">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 col-12 mb-25">--}}
                        {{--<input type="text" placeholder="Postcode / Zip">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 col-12 mb-25">--}}
                        {{--<input type="submit" value="Estimate">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                        <!-- Discount Coupon -->
                            <div class="discount-coupon">
                                <h4>Discount Coupon Code</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="text" placeholder="Coupon Code">
                                        </div>
                                        <div class="col-md-6 col-12 mb-25">
                                            <input type="submit" value="Apply Code">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Cart Summary -->
                        <div class="col-lg-6 col-12 mb-40 d-flex">
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Cart Summary</h4>
                                    <p>Sub Total <span>BDT {{ $totalprice }}</span></p>
                                    <p>Shipping Cost <span>BDT 100</span></p>
                                    <h2>Grand Total <span>BDT {{ $totalprice+100 }}</span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <form action="{{route('checkout')}}" method="post">
                                        @csrf
                                        <button class="checkout-btn">Checkout Now</button>
                                    </form>

                                    {{--<button class="update-btn">Update Cart</button>--}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->
@endsection