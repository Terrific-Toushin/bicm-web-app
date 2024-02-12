@extends('frontend.master')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/recent_projects.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/engagement.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/media.css">
@endsection
@section('content')
    <section id="digital-solution">
        <div class="container">

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
{{--                        <span class="badge badge-secondary badge-pill">3</span>--}}
                    </h4>
{{--                    @dump($paymentDetails)--}}
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Course Amount</h6>
                                <small class="text-muted"></small>
                            </div>
                            <span class="text-muted">{{$paymentDetails->amount}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Charges</h6>
                                <small class="text-muted">Vat & others</small>
                            </div>
                            <span class="text-muted">0</span>
                        </li>
{{--                        <li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--                            <div>--}}
{{--                                <h6 class="my-0"></h6>--}}
{{--                                <small class="text-muted">Brief description</small>--}}
{{--                            </div>--}}
{{--                            <span class="text-muted">150</span>--}}
{{--                        </li>--}}
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BDT)</span>
                            <strong>{{$paymentDetails->amount}} TK</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Your Details</h4>
                    <form method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="firstName">Full name</label>
                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder=""
                                       value="{{$paymentDetails->first_name}} {{$paymentDetails->last_name}}" readonly>
                                <div class="invalid-feedback">
                                    Valid customer name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="mobile">Mobile</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+88</span>
                                </div>
                                <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"
                                       value="{{$paymentDetails->contact_number}}" readonly>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your Mobile number is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="customer_email" class="form-control" id="email"
                                   placeholder="you@example.com" value="{{$paymentDetails->email}}" readonly>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Custom Payment</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_payment_adjust" id="customYes" value="Y" autocomplete="off" onclick="toggleOrganization('customYes')" required>Yes
                                </label>
                                <label>
                                    <input type="radio" name="customer_payment_adjust" id="customNo" value="N" autocomplete="off" checked onclick="toggleOrganization('customNo')" required>No
                                </label>
                            </div>
                        </div>

                        <div id="amount-id" class="mb-3" style="display: none">
                            <label for="address">Amount</label>
                            <input id="custom-amount" type="number" class="form-control" name="customAmount" autocomplete="off" placeholder="Please enter your amount" value="" onblur="setAmount()" >
                            <div class="invalid-feedback"> Please enter your amount.</div>
                        </div>

                        <div id="remarks" class="mb-3"  style="display: none">
                            <label for="address">Remarks</label>
                            <input id="custom-remarks" type="text" class="form-control" name="customRemarks" autocomplete="off" placeholder="Please enter the reason" value="" onblur="setRemarks()">
                            <div class="invalid-feedback"> Please enter the reason. </div>
                        </div>

{{--                        <div class="mb-3">--}}
{{--                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>--}}
{{--                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-5 mb-3">--}}
{{--                                <label for="country">Country</label>--}}
{{--                                <select class="custom-select d-block w-100" id="country" required>--}}
{{--                                    <option value="">Choose...</option>--}}
{{--                                    <option value="Bangladesh">Bangladesh</option>--}}
{{--                                </select>--}}
{{--                                <div class="invalid-feedback">--}}
{{--                                    Please select a valid country.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 mb-3">--}}
{{--                                <label for="state">State</label>--}}
{{--                                <select class="custom-select d-block w-100" id="state" required>--}}
{{--                                    <option value="">Choose...</option>--}}
{{--                                    <option value="Dhaka">Dhaka</option>--}}
{{--                                </select>--}}
{{--                                <div class="invalid-feedback">--}}
{{--                                    Please provide a valid state.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-3 mb-3">--}}
{{--                                <label for="zip">Zip</label>--}}
{{--                                <input type="text" class="form-control" id="zip" placeholder="" required>--}}
{{--                                <div class="invalid-feedback">--}}
{{--                                    Zip code required.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <hr class="mb-4">--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="same-address">--}}
{{--                            <input type="hidden" value="1200" name="amount" id="total_amount" required/>--}}
{{--                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing--}}
{{--                                address</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="save-info">--}}
{{--                            <label class="custom-control-label" for="save-info">Save this information for next time</label>--}}
{{--                        </div>--}}
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                                token="{{$paymentDetails->payment_id.$paymentDetails->student_id.$paymentDetails->form_id}}"
                                postdata=""
                                order="{{$paymentDetails->payment_id}}"
                                endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                        </button>
                    </form>
                </div>
            </div>
            <!-- Row -->
        </div>
    </section>

    <div class="inside_gap"></div>

    <!-- =========================== Senior UX Designer PART END =========================== -->

    <!-- =========================== ENGEGMENT PART START =========================== -->
    <!-- =========================== FOOTER PART  START =========================== -->
    @include('frontend.include.footer')
@endsection
@section('customScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script>
        function toggleOrganization(id) {
            let checkbox = document.getElementById(id); // Replace 'myCheckbox' with the actual ID of your checkbox
            let divToShowHide1 = document.getElementById('amount-id'); // Replace 'myDiv' with the actual ID of your div
            let divToShowHide2 = document.getElementById('remarks'); // Replace 'myDiv' with the actual ID of your div

            if (checkbox.checked && id == 'customYes') {
                divToShowHide1.style.display = 'block';
                divToShowHide2.style.display = 'block';
            } else {
                divToShowHide1.style.display = 'none';
                divToShowHide2.style.display = 'none';
            }
            console.log(document.querySelector("input[type='radio'][name='customer_payment_adjust']:checked").value);
            console.log(document.getElementById('custom-amount').value);
            console.log(document.getElementById('custom-remarks').value);
        }
        const obj = {};
        obj.cus_name = '<?php echo $paymentDetails->first_name.' '.$paymentDetails->last_name; ?>';
        obj.cus_phone = '<?php echo $paymentDetails->contact_number ?>';
        obj.cus_email = '<?php echo $paymentDetails->email ?>';
        obj.cus_addr1 = '';
        obj.amount = '<?php echo $paymentDetails->amount ?>';
        obj.payment_id = '<?php echo $paymentDetails->payment_id ?>';
        obj.customer_payment_adjust = $("input[type='radio'][name='customer_payment_adjust']:checked").val();
        obj.customAmount = $('#custom-amount').val();
        obj.customRemarks = $('#custom-remarks').val();
        function setAmount (){
            obj.customer_payment_adjust = $("input[type='radio'][name='customer_payment_adjust']:checked").val();
            obj.customAmount = $('#custom-amount').val();
            obj.customRemarks = $('#custom-remarks').val();
        }
        function setRemarks (){
            obj.customer_payment_adjust = $("input[type='radio'][name='customer_payment_adjust']:checked").val();
            obj.customAmount = $('#custom-amount').val();
            obj.customRemarks = $('#custom-remarks').val();
        }
        // console.log(obj);
        $('#sslczPayBtn').prop('postdata', obj);

        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);
    </script>
@endsection
