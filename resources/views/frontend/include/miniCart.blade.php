<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap" id="shopTest">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">

        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

    </div>


    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        @php($totalprice = 0)
        @foreach( $cartProducts as $cartProduct )

            <li>
                <a class="image"><img src="{{asset($cartProduct->options->image)}}" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">{{ $cartProduct->name }}</a>
                    <span class="price">Price: {{ $cartProduct->subtotal }}</span>
                    <span class="qty">Color: {{ $cartProduct->options->color }}</span>
                    <span class="qty">Qty: {{ $cartProduct->qty }}</span>
                </div>

                <a class="remove" onclick="event.preventDefault();
                        document.getElementById('<?php echo $cartProduct->rowId; ?>removeCart-form').submit();">
                    <i class="fa fa-trash-o"></i>
                </a>

                <form id="<?php echo $cartProduct->rowId; ?>removeCart-form" action="{{ route('removeCart') }}" method="POST" style="">
                    @csrf
                    <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}">
                </form>

            </li>
            @php($totalprice = $totalprice+$cartProduct->subtotal)
        @endforeach
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">

        <h4 class="sub-total">Total: <span>{{ $totalprice }}</span></h4>

        <div class="button">
            <a href="{{route('cartItem')}}">CHECK OUT</a>
        </div>

    </div>

</div><!-- Mini Cart Wrap End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>