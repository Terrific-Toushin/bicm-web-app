@extends('frontend.master')
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
@section('content')
    @if(!empty($contentDetails))
        <section id="pageBannerPart">
            <div class="banner_images">
                @if(!empty($pageDetails->banner))
                    <!-- <div class="row">
                        <div class="col-md-12"> -->
                    <img src="{{ asset('/'.$pageDetails->banner) }}" alt="Technology" class="img-fluid w-100">
                    <!-- </div>
                </div> -->
                @endif
            </div>
        </section>
        <section id="blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-text">
                            <h3>@if(!empty($pageDetails->page_name))
                                    {!! $pageDetails->page_name !!}
                                @endif</h3>
                        </div>
                    </div>
                </div>
                <div class="featured_content">
                    <div class="row">
                        @foreach($contentDetails as $content)
                            <div class="col-lg-4 col-sm-6">
                                <div class="blog-tab">
                                    <div class="img">
                                        <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->masters_program_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                      class="img-fluid w-100"></a>
                                    </div>
                                    <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->masters_program_id)}}">{!! $content->tittle !!}</a></h4>
                                    <p class="date_time">
                                        <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                        <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                    </p>
                                    <div class="course_price">
                                        <span>${!! $content->amount !!}</span>
                                        <a href="{{url('pages/program-apply/'.$content->page_id.'/'.$content->masters_program_id)}}" class="enroll_now" title="Enroll Courses">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 m-auto">--}}
    {{--                    <div class="blog_number">--}}
    {{--                        <ul>--}}
    {{--                            <li><a class="active" href="">1</a></li>--}}
    {{--                            <li><a href="">2</a></li>--}}
    {{--                            <li><a href="">3</a></li>--}}
    {{--                            <li><a href="">4</a></li>--}}
    {{--                            <li><a href="">5</a></li>--}}
    {{--                            <li><a href="">6</a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
            </div>
        </section>
    @endif
    @include('frontend.include.footer')
@endsection
