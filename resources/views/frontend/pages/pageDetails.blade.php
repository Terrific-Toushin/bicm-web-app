@extends('frontend.master')
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/recent_projects.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_single.css">
@section('content')
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
    <section id="digital-solution" style="margin-top: 8%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="digital-part text-center technology">
                        @if(!empty($pageDetails->heading))
                            {!! $pageDetails->heading !!}
                        @endif
                    </div>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                @if(!empty($pageDetails->short_description))
                    <section id="short_description">
                        {!! $pageDetails->short_description !!}
                    </section>
                @endif
                @if(!empty($pageDetails->description))
                    <section id="description">
                        {!! $pageDetails->description !!}
                    </section>
                @endif
                @if(!empty($contentDetails))
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
                                    @if($pageDetails->page_type == 'master')
                                        @foreach($contentDetails as $content)
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="blog-tab">
                                                    <div class="img">
                                                        <a href="{{url('pages/program-details/'.$content->masters_program_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                                      class="img-fluid w-100"></a>
                                                    </div>
                                                    <h4 class="courses_head"><a href="{{url('pages/program-details/'.$content->masters_program_id)}}">{!! $content->title !!}</a></h4>
                                                    <p class="date_time">
                                                        <span><img src="images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                        <span><img src="images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                    </p>
                                                    <div class="course_price">
                                                        <span>${!! $content->amount !!}</span>
                                                        <button class="enroll_now" title="Enroll Courses">Apply Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    @elseif($pageDetails->page_type == 'courses')
                                        @foreach($contentDetails as $content)
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="blog-tab">
                                                    <div class="img">
                                                        <a href="{{url('pages/course-details/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                            class="img-fluid w-100"></a>
                                                    </div>
                                                    <h4 class="courses_head"><a href="blog_single.html">{!! $content->title !!}</a></h4>
                                                    <p class="date_time">
                                                        <span><img src="images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                        <span><img src="images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                    </p>
                                                    <div class="course_price">
                                                        <span>${!! $content->amount !!}</span>
                                                        <button class="enroll_now" title="Enroll Courses">Enroll Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @elseif($pageDetails->page_type == 'event')
                                        @foreach($contentDetails as $content)
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="blog-tab">
                                                    <div class="img">
                                                        <a href="{{url('pages/event-details/'.$content->course_id)}}"><img src="{{ asset('/'.$content->image) }}" alt="Technology"
                                                                                                                           class="img-fluid w-100"></a>
                                                    </div>
                                                    <h4 class="courses_head"><a href="blog_single.html">{!! $content->title !!}</a></h4>
                                                    <p class="date_time">
                                                        <span><img src="images/calendar-alt.png" height="" width="" alt="#calender">{!! $content->schedule !!}</span>
                                                        <span><img src="images/clock.png" height="" width="" alt="Clock">{!! $content->duration !!}</span>
                                                    </p>
                                                    <div class="course_price">
                                                        <span>${!! $content->amount !!}</span>
                                                        <button class="enroll_now" title="Enroll Courses">Enroll Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    @elseif($pageDetails->page_type == 'common' && $pageDetails->form_status == 'Y')
                                        <form method="POST" action="{{ route('storeContactData') }}" enctype="multipart/form-data" name="formData" class="padding">
                                            @csrf
                                            <input type="hidden" class="form-control" name="program_id" value="contact" placeholder="">
                                            <input type="hidden" class="form-control" name="page_id" value="{{$pageDetails->page_id}}" placeholder="">
                                            <input type="hidden" class="form-control" name="page_type" value="{{$pageDetails->page_type}}" placeholder="">
                                            <div class="row">

                                                @php
                                                    $name = '';
                                                    $inputType = $contentDetails['inputType'];
                                                @endphp
                                                @foreach($contentDetails['formList'] as $forms)
                                                    @if($name != $forms->name)
                                                        @php $name = $forms->name @endphp
                                                        <div class="col-lg-12" style="margin: 20px;font-weight: bold;background-color: #0072bc;color: white;">{{$forms->name}}</div>
                                                    @endif
                                                    @if($forms->ftype == 'FR')
                                                        <div class="{{$forms->fclass}}">
                                                            <div class="from">
                                                                <label for="{{$forms->fid}}" class="form-label">{!! $forms->flabel !!} @if($forms->frequired == '1') <span class="required">*</span> @endif</label>
                                                                @php
                                                                    $fRadios = convertStringToArray($forms->foption_value);
                                                                @endphp
                                                                @foreach($fRadios as $key=>$fRadio)

                                                                    <input type="radio" id="radio{{$key}}" value="{{$fRadio['value']}}" name="{{$forms->fname}}" >
                                                                    <label for="radio{{$key}}" class="form-label"></span>{{$fRadio['label']}}</label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="{{$forms->fclass}}">
                                                            <div class="from">
                                                                <label for="{{$forms->fid}}" class="form-label">{!! $forms->flabel !!} @if($forms->frequired == '1') <span class="required">*</span> @endif</label>
                                                                <input type="{{$inputType[$forms->ftype]}}" class="form-control" id="{{$forms->fid}}" name="{{$forms->fname}}" >
                                                            </div>
                                                        </div>
                                                    @endif

                                                @endforeach



                                                <div class="col-lg-6">
                                                    <div class="custom-inputs submit">
                                                        <button type="submit" class="btn">
                                                            Submit
                                                            <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g filter="url(#filter0_d)">
                                                                    <circle cx="79" cy="79" r="29" fill="#4F81BD"></circle>
                                                                </g>
                                                                <path d="M85.7762 78.3732L80.7203 72.9666C80.576 72.8123 80.3837 72.7275 80.1785 72.7275C79.9732 72.7275 79.781 72.8124 79.6367 72.9666L79.1776 73.4576C79.0334 73.6117 78.954 73.8175 78.954 74.0369C78.954 74.2562 79.0334 74.469 79.1776 74.6231L82.1272 77.7841H72.7563C72.3338 77.7841 72 78.1378 72 78.5897V79.2838C72 79.7357 72.3338 80.1251 72.7563 80.1251H82.1606L79.1777 83.3037C79.0335 83.458 78.9541 83.6583 78.9541 83.8777C78.9541 84.0969 79.0335 84.3 79.1777 84.4542L79.6368 84.9437C79.7811 85.098 79.9733 85.1821 80.1787 85.1821C80.3838 85.1821 80.5761 85.0969 80.7204 84.9426L85.7763 79.5361C85.921 79.3813 86.0006 79.1746 86 78.9549C86.0005 78.7345 85.921 78.5277 85.7762 78.3732Z" fill="white"></path>
                                                                <defs>
                                                                    <filter id="filter0_d" x="0" y="0" width="158" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                                                        <feOffset></feOffset>
                                                                        <feGaussianBlur stdDeviation="25"></feGaussianBlur>
                                                                        <feColorMatrix type="matrix" values="0 0 0 0 0.956863 0 0 0 0 0.501961 0 0 0 0 0.223529 0 0 0 0.4 0"></feColorMatrix>
                                                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                                                    </filter>
                                                                </defs>
                                                            </svg>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            {{--                <div class="row">--}}
                            {{--                    <div class="col-lg-4 m-auto">--}}
                            {{--                        <div class="blog_number">--}}
                            {{--                            <ul>--}}
                            {{--                                <li><a class="active" href="">1</a></li>--}}
                            {{--                                <li><a href="">2</a></li>--}}
                            {{--                                <li><a href="">3</a></li>--}}
                            {{--                                <li><a href="">4</a></li>--}}
                            {{--                                <li><a href="">5</a></li>--}}
                            {{--                                <li><a href="">6</a></li>--}}
                            {{--                            </ul>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                            {{--                </div>--}}
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </section>
    <!-- =========================== Senior UX Designer PART START =========================== -->


    <div class="inside_gap"></div>

    <!-- =========================== Senior UX Designer PART END =========================== -->

    <!-- =========================== ENGEGMENT PART START =========================== -->

    <!-- Do you want to trained by us START -->
{{--    <section id="traind_by_us">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 m-auto">--}}
{{--                    <div class="trained_text">--}}
{{--                        <h3>Do you want to trained by us?</h3>--}}
{{--                        <p>At Doodle, we believe in quality over anything else. Our entire planning and execution are based on perfection and to ensure a flawless output. We deeply focus on the business values and ensure a transparent workflow throughout--}}
{{--                            the product development by consistent--}}
{{--                        </p>--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{ asset('/') }}/assets/frontend/images/trained.png" alt="img">--}}
{{--                        </div>--}}

{{--                        <form action="">--}}
{{--                            <button class="trained_btn">--}}
{{--                                <span><a href="internship.html">Apply Now</a></span>--}}
{{--                                <p>--}}
{{--                                    <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <circle cx="19.5" cy="20.2529" r="19.5" fill="white"/>--}}
{{--                                        <g clip-path="url(#clip0)">--}}
{{--                                            <path d="M24.5345 19.8489L20.7787 16.093C20.6715 15.9858 20.5286 15.9269 20.3763 15.9269C20.2237 15.9269 20.0809 15.9859 19.9737 16.093L19.6327 16.4341C19.5256 16.5411 19.4666 16.6841 19.4666 16.8366C19.4666 16.9889 19.5256 17.1367 19.6327 17.2438L21.8238 19.4397H14.8626C14.5488 19.4397 14.3008 19.6854 14.3008 19.9993V20.4815C14.3008 20.7955 14.5488 21.0659 14.8626 21.0659H21.8487L19.6328 23.2741C19.5257 23.3813 19.4667 23.5204 19.4667 23.6728C19.4667 23.8251 19.5257 23.9662 19.6328 24.0734L19.9738 24.4134C20.081 24.5206 20.2238 24.579 20.3764 24.579C20.5287 24.579 20.6716 24.5198 20.7788 24.4126L24.5346 20.6568C24.6421 20.5492 24.7012 20.4057 24.7008 20.2531C24.7011 20.0999 24.6421 19.9563 24.5345 19.8489Z" fill="black"/>--}}
{{--                                        </g>--}}
{{--                                        <defs>--}}
{{--                                            <clipPath id="clip0">--}}
{{--                                                <rect width="10.4" height="10.4" fill="white" transform="translate(14.3008 15.053)"/>--}}
{{--                                            </clipPath>--}}
{{--                                        </defs>--}}
{{--                                    </svg>--}}
{{--                                </p>--}}

{{--                            </button>--}}
{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Do you want to trained by us END -->
    <!-- =========================== FOOTER PART  START =========================== -->
    <div id="tiny_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-6 col-md-6">
                    <div class="tiny_footer_logo">
                        <a href="index.html"><img class="img-responsive" src="{{ asset('/') }}/assets/frontend/images/tiny_.png" alt="" srcset=""></a>
                        <span>© Copyright 2023 BICM.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 col-md-6">
                    <div class="social_icon">
                        <a>
                            <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.91797 3.23828H9.64062V0.390625C9.32422 0.355469 8.33984 0.25 7.14453 0.25C4.71875 0.25 3.03125 1.76172 3.03125 4.50391V7H0.359375V10.1992H3.03125V18.25H6.33594V10.1992H8.9375L9.35938 7H6.33594V4.82031C6.33594 3.87109 6.61719 3.23828 7.91797 3.23828Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a>
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.1367 4.59375C16.8398 4.06641 17.4727 3.43359 17.9648 2.69531C17.332 2.97656 16.5938 3.1875 15.8555 3.25781C16.6289 2.80078 17.1914 2.09766 17.4727 1.21875C16.7695 1.64062 15.9609 1.95703 15.1523 2.13281C14.4492 1.39453 13.5 0.972656 12.4453 0.972656C10.4062 0.972656 8.75391 2.625 8.75391 4.66406C8.75391 4.94531 8.78906 5.22656 8.85938 5.50781C5.80078 5.33203 3.05859 3.85547 1.23047 1.64062C0.914062 2.16797 0.738281 2.80078 0.738281 3.50391C0.738281 4.76953 1.37109 5.89453 2.39062 6.5625C1.79297 6.52734 1.19531 6.38672 0.703125 6.10547V6.14062C0.703125 7.93359 1.96875 9.41016 3.65625 9.76172C3.375 9.83203 3.02344 9.90234 2.70703 9.90234C2.46094 9.90234 2.25 9.86719 2.00391 9.83203C2.46094 11.3086 3.83203 12.3633 5.44922 12.3984C4.18359 13.3828 2.60156 13.9805 0.878906 13.9805C0.5625 13.9805 0.28125 13.9453 0 13.9102C1.61719 14.9648 3.55078 15.5625 5.66016 15.5625C12.4453 15.5625 16.1367 9.97266 16.1367 5.08594C16.1367 4.91016 16.1367 4.76953 16.1367 4.59375Z"
                                    fill="black" />
                            </svg>
                        </a>
                        <a>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.64062 16V5.48828H0.371094V16H3.64062ZM1.98828 4.08203C3.04297 4.08203 3.88672 3.20312 3.88672 2.14844C3.88672 1.12891 3.04297 0.285156 1.98828 0.285156C0.96875 0.285156 0.125 1.12891 0.125 2.14844C0.125 3.20312 0.96875 4.08203 1.98828 4.08203ZM15.8398 16H15.875V10.2344C15.875 7.42188 15.2422 5.24219 11.9375 5.24219C10.3555 5.24219 9.30078 6.12109 8.84375 6.92969H8.80859V5.48828H5.67969V16H8.94922V10.7969C8.94922 9.42578 9.19531 8.125 10.8828 8.125C12.5703 8.125 12.6055 9.67188 12.6055 10.9023V16H15.8398Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <!-- =========================== FOOTER PART END =========================== -->


    <!-- ========== BACK TO TOP START ========== -->
    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- ========== BACK TO TOP END ========== -->
@endsection
