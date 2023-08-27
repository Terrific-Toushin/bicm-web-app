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
                        <div class="col-lg-8 m-auto">
                            @foreach($contentDetails as $content)
                            <!-- 1st part -->
                            <div class="senior_designer_item">
                                <div class="senior_right">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="logo">
                                                <img src="{{ asset('/'.$content->image) }}" alt="images" style="width: 253px;height: 253px;">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <div class="senior_right_text">
                                                <h4>{!! $content->tittle !!}</h4>
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
