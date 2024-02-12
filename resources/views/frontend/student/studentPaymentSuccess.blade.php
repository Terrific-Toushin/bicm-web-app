@extends('frontend.master')
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/recent_projects.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_single.css">
@section('content')
    <section id="loginPart">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <div class="login_signup_left">
                        <div class="left_login">
                            <a href="{{route('home')}}"><img class="img-responsive" src="{{ asset('/') }}/assets/frontend/images/BICM-Logo.png" alt="" /></a>
                            <h3 class="desk">Bangladesh Institute of Capital Market (BICM)</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="login_signup_right">

                        <h3>Payment Details</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Paid Amount</th>
                                <td width="2%">:</td>
                                <td>{!! $amount !!}</td>
                            </tr>
                            <tr>
                                <th width="30%">Transaction ID</th>
                                <td width="2%">:</td>
                                <td>{!! $tran_id !!}</td>
                            </tr>
                            <tr>
                                <th width="30%">Payment Status</th>
                                <td width="2%">:</td>
                                <td>{!! $paidStatus !!}</td>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =========================== FOOTER PART  START =========================== -->
    @include('frontend.include.footer')
@endsection
