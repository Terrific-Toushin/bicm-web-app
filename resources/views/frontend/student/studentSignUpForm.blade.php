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

                        <h3>Sign Up</h3>
                        <p>Already have an account?<a href="{{route('studentLogin')}}">Sign In</a></p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('studentNew') }}" enctype="multipart/form-data" name="formData" class="form">
                            @csrf
                            <div class="row form-group">
                                <div class="col">
                                    <input type="text" required class="form-control" placeholder="First name" name="first_name">
                                </div>
                                <div class="col">
                                    <input type="text" required class="form-control" placeholder="Last name" name="last_name">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col">
                                    <input type="text" required class="form-control" placeholder="NID Number" name="nid_birth">
                                </div>
                                <div class="col">
                                    <input type="text" required class="form-control" placeholder="Mobile Number" name="contact_number">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col">
                                    <input type="email" required class="form-control" placeholder="E-mail" name="email">
                                </div>
                                <div class="col">
                                    <input type="email" required class="form-control" placeholder="Confirm E-mail" name="email_confirmation">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col">
                                    <input type="password" required class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="col">
                                    <input type="password" required class="form-control" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">signup</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =========================== FOOTER PART  START =========================== -->
    @include('frontend.include.footer')
@endsection
