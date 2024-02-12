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
                            <h3>{!! $pageDetails->page_name !!}</h3>
                        </div>
                    </div>
                </div>
{{--                <div class="featured_content">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($contentDetails as $content)--}}
{{--                            @if(!empty($content->courseTypes) && ($content->courseTypes != "null") && array_search('Featured', json_decode($content->courseTypes,true)) !== false)--}}
{{--                                <div class="col-lg-3 col-sm-6">--}}
{{--                                    <div class="blog-tab">--}}
{{--                                        <div class="img">--}}
{{--                                            <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"--}}
{{--                                                                                                                                             class="img-fluid w-100"></a>--}}
{{--                                        </div>--}}
{{--                                        <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}">{!! $content->tittle !!}</a></h4>--}}
{{--                                        <p class="date_time">--}}
{{--                                            <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>--}}
{{--                                            <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>--}}
{{--                                        </p>--}}
{{--                                        <div class="course_price">--}}
{{--                                            <span>$--}}
{{--                                                {!! $content->amount !!}--}}
{{--                                                @php $amountArray = json_decode($content->amount); @endphp--}}
{{--                                                @if(json_last_error() === 0)--}}
{{--                                                    @foreach($amountArray as $amountKey => $amountValue)--}}
{{--                                                        {!! $amountKey !!}--}}
{{--                                                        @break--}}
{{--                                                    @endforeach--}}
{{--                                                @endif--}}
{{--                                            </span>--}}
{{--                                            <a href="{{url('pages/program-apply/'.$pageDetails->page_id.'/'.$content->course_id)}}" class="enroll_now" title="Enroll Courses">Apply Now</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="courses_content">
                    @if($pageDetails->page_name != 'Certification Program')
                        <div class="controls">
                            <ul class="nav nav-tabs">
                                <li class="active"><a class="active" data-toggle="tab" href="#all_course">All Course</a></li>
                                {{--                            <li><a data-toggle="tab" href="#popular_course">Popular Courserses</a></li>--}}
                                <li><a data-toggle="tab" href="#upcoming_course">Upcoming Courses</a></li>
                                <li><a data-toggle="tab" href="#running_course">Running Courses</a></li>
                                <li><a data-toggle="tab" href="#completed_course">Completed courses</a></li>
                            </ul>
                        </div>
                    @endif
                    <div class="blog-tab-container">
                        <div class="tab-content">
                            <div id="all_course" class="tab-pane row active">
                                @foreach($contentDetails as $content)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="blog-tab">
                                            <div class="img">
                                                <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                                                 class="img-fluid w-100"></a>
                                            </div>
                                            <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}">{!! $content->tittle !!}</a></h4>
                                            <p class="date_time">
                                                <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                            </p>
                                            <div class="course_price">
                                                <span>${!! $content->amount !!}</span>
{{--                                                <button class="enroll_now" title="Enroll Courses">Apply Now dDDDDDDDDDDDd</button>--}}
                                                <a href="{{url('pages/program-apply/'.$pageDetails->page_id.'/'.$content->course_id)}}" class="btn default btn-primary btn-xs">Enroll
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="popular_course" class="tab-pane row">
                                @foreach($contentDetails as $content)
                                    @if(!empty($content->courseTypes) && ($content->courseTypes != "null") && ($content->courseTypes == "popular"))
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-tab">
                                                <div class="img">
                                                    <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                                                     class="img-fluid w-100"></a>
                                                </div>
                                                <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}">{!! $content->tittle !!}</a></h4>
                                                <p class="date_time">
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                </p>
                                                <div class="course_price">
                                                    <span>${!! $content->amount !!}</span>
                                                    <button class="enroll_now" title="Enroll Courses">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div id="upcoming_course" class="tab-pane row">
                                @foreach($contentDetails as $content)
                                    @if(!empty($content->courseTypes) && ($content->courseTypes != "null") && ($content->courseTypes == "upcoming"))
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-tab">
                                                <div class="img">
                                                    <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                                                     class="img-fluid w-100"></a>
                                                </div>
                                                <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}">{!! $content->tittle !!}</a></h4>
                                                <p class="date_time">
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                </p>
                                                <div class="course_price">
                                                    <span>${!! $content->amount !!}</span>
                                                    <button class="enroll_now" title="Enroll Courses">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div id="running_course" class="tab-pane row">
                                @foreach($contentDetails as $content)
                                    @if(!empty($content->courseTypes) && ($content->courseTypes != "null") && ($content->courseTypes == "running"))
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-tab">
                                                <div class="img">
                                                    <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                                                     class="img-fluid w-100"></a>
                                                </div>
                                                <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}">{!! $content->tittle !!}</a></h4>
                                                <p class="date_time">
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                </p>
                                                <div class="course_price">
                                                    <span>${!! $content->amount !!}</span>
                                                    <button class="enroll_now" title="Enroll Courses">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div id="completed_course" class="tab-pane row">
                                @foreach($contentDetails as $content)
                                    @if(!empty($content->courseTypes) && ($content->courseTypes != "null") && ($content->courseTypes == "past"))
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-tab">
                                                <div class="img">
                                                    <a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                                                     class="img-fluid w-100"></a>
                                                </div>
                                                <h4 class="courses_head"><a href="{{url('pages/program-details/'.$pageDetails->page_type.'/'.$content->course_id)}}">{!! $content->tittle !!}</a></h4>
                                                <p class="date_time">
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                    <span><img src="{{ asset('/') }}/assets/frontend/images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                </p>
                                                <div class="course_price">
                                                    <span>${!! $content->amount !!}</span>
                                                    <button class="enroll_now" title="Enroll Courses">Apply Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
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
