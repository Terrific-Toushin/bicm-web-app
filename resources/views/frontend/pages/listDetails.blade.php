@extends('frontend.master')
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/team.css">
@section('content')
    @if(!empty($pageDetails))
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
        <section id="blog-part" class="our-webcoderskull padding-lg">

            <!-- Modal -->
            @if(!empty($contentDetails))
                @foreach($contentDetails as $key=>$contentInfo)
                    <div class="modal fade bd-example-modal-xl" id="userView{{$key}}" tabindex="-1" role="dialog" aria-labelledby="userView{{$key}}Label" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="userView{{$key}}Label">{!! $contentInfo->tittle !!} Info</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="teamContent">
                                        <div class="teamContentHead">
                                            <img src="{{ asset('/'.$contentInfo->image) }}" class="card-img-top" alt="...">
                                            <h5 class="card-title">{!! $contentInfo->tittle !!}</h5>
                                        </div>

                                        <div class="teamContentBody">
                                            {!! $contentInfo->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            <div class="container">
                <div class="row heading heading-icon">
                    <h2>Our Team</h2>
                </div>
                <ul class="row">
                    @if(!empty($contentDetails))
                        @foreach($contentDetails as $key=>$contentInfo)
                            <li class="col-12 col-md-6 col-lg-3">
                                <div data-toggle="modal" data-target="#userView{{$key}}" class="cnt-block equal-hight">
                                    <figure><img src="{{ asset('/'.$contentInfo->image) }}" class="img-responsive" alt=""></figure>
                                    <h3>{!! $contentInfo->tittle !!}</h3>
                                    <p>{!! $contentInfo->sub_tittle !!}</p>
                                    <ul class="follow-us clearfix">
                                        @php
                                            $contactLinks = explode(',',$contentInfo->contact_link)
                                        @endphp
                                        @if(is_array($contactLinks))
                                            @foreach($contactLinks as $keys=>$contactLink)
                                                @if($keys == 0)
                                                    <li><a href="{!! $contactLink !!}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                @elseif($keys == 1)
                                                    <li><a href="{!! $contactLink !!}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                @elseif($keys == 2)
                                                    <li><a href="{!! $contactLink !!}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                @endif
                                            @endforeach
                                        @endif

                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>
    @endif
    @include('frontend.include.footer')
@endsection
