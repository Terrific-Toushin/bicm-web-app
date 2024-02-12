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
                <div class="courses_content">
                    <div class="controls">
                        <ul class="nav nav-tabs">
                            <li class="active"><a  class="active" data-toggle="tab" href="#all_event">All Event</a>
                            </li>
                            @foreach($groupYear as $year)
                                <li><a data-toggle="tab" href="#{{$year}}_event">{{$year}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="blog-tab-container">
                        <div class="tab-content">
                            <div id="all_event" class="tab-pane row active">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @foreach($contentDetails as $content)
                                            <!-- 1st part -->
                                            {{--                            @dump($content)--}}
                                            <div class="senior_designer_item">
                                                <div class="senior_right">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                                            <div class="event_images">
                                                                <img src="{{ asset('/'.$content->image) }}" alt="Event Images" style="width: 253px;height: 253px;">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="senior_right_text">
                                                                {{--                                                <h4><a href="{{route('eventsDetails',['page_id'=>$content->course_id])}}">{!! $content->tittle !!}</a></h4>--}}
                                                                <h4><a href="{{route('eventsDetails', ['page_id' => $content->events_id])}}">{!! $content->tittle !!}</a></h4>
                                                                <div class="file">
                                                                    <ul>
                                                                        <li><a href="#">{!! $content->schedule !!}</a></li>
                                                                        <li><a href="#">posted by {!! $content->author !!}</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>
                                                                    {!! $content->shortDescription !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @foreach($groupYear as $year)
                                <div id="{{$year}}_course" class="tab-pane row">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @foreach($groupContent[$year] as $contentYear)
                                                <!-- 1st part -->
                                                {{--                            @dump($content)--}}
                                                <div class="senior_designer_item">
                                                    <div class="senior_right">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                                <div class="event_images">
                                                                    <img src="{{ asset('/'.$contentYear->image) }}" alt="Event Images" style="width: 253px;height: 253px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="senior_right_text">
                                                                    {{--                                                <h4><a href="{{route('eventsDetails',['page_id'=>$content->course_id])}}">{!! $content->tittle !!}</a></h4>--}}
                                                                    <h4><a href="{{route('eventsDetails', ['page_id' => $contentYear->events_id])}}">{!! $contentYear->tittle !!}</a></h4>
                                                                    <div class="file">
                                                                        <ul>
                                                                            <li><a href="#">{!! $contentYear->schedule !!}</a></li>
                                                                            <li><a href="#">posted by {!! $contentYear->author !!}</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <p>
                                                                        {!! $contentYear->shortDescription !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach

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
