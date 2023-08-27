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
                        <h3>Sign In</h3>
                        <p>Don't have an account?<a href="{{url('student-signUp')}}">Sign Up</a></p>
                        @if(session('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                        @endif
                        <form method="POST" action="{{ route('checkStudentLogin') }}" enctype="multipart/form-data" name="formData" class="form">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <div class="userName_Password_remember">
                                <label class="login_check"><input name="remember" aria-label="remember" type="checkbox" value="" checked=""><span class="checkmark"></span> Remember Me</label>
                                <p><a href="{{route('studentForgetLogin')}}">Forgot your password?</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =========================== FOOTER PART  START =========================== -->
    @include('frontend.include.footer')
@endsection
