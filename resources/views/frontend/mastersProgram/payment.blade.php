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
                <div class="col-lg-8 m-auto">
                    <div class="digital-part text-center technology">
                        <h2><span>You will be redirect payment page soon</span></h2>
                        <div class="digital-overlay">
                        </div>
                    </div>
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
