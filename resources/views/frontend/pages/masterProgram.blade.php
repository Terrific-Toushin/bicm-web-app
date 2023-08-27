@extends('frontend.master')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_single.css">
@endsection
@section('content')
    <!-- =========================== BLOG-SINGLE PART START =========================== -->
    <section id="pageBannerPart">
        <div class="banner_images">
            @if(!empty($pageDetails->image))
                <!-- <div class="row">
                        <div class="col-md-12"> -->
                <img src="{{ asset('/'.$pageDetails->image) }}" alt="Technology" class="img-fluid w-100">
                <!-- </div>
            </div> -->
            @endif
        </div>
    </section>
    <section id="blog_single" style="margin-top: 10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="course_detels_top">
                        <div class="social-link">

                            <a href="">
                                <svg width="11" height="19" viewBox="0 0 11 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.41797 3.23828H10.1406V0.390625C9.82422 0.355469 8.83984 0.25 7.64453 0.25C5.21875 0.25 3.53125 1.76172 3.53125 4.50391V7H0.859375V10.1992H3.53125V18.25H6.83594V10.1992H9.4375L9.85938 7H6.83594V4.82031C6.83594 3.87109 7.11719 3.23828 8.41797 3.23828Z"
                                        fill="black" />
                                </svg>
                            </a>

                            <a href="">
                                <svg width="19" height="16" viewBox="0 0 19 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.6367 4.59375C17.3398 4.06641 17.9727 3.43359 18.4648 2.69531C17.832 2.97656 17.0938 3.1875 16.3555 3.25781C17.1289 2.80078 17.6914 2.09766 17.9727 1.21875C17.2695 1.64062 16.4609 1.95703 15.6523 2.13281C14.9492 1.39453 14 0.972656 12.9453 0.972656C10.9062 0.972656 9.25391 2.625 9.25391 4.66406C9.25391 4.94531 9.28906 5.22656 9.35938 5.50781C6.30078 5.33203 3.55859 3.85547 1.73047 1.64062C1.41406 2.16797 1.23828 2.80078 1.23828 3.50391C1.23828 4.76953 1.87109 5.89453 2.89062 6.5625C2.29297 6.52734 1.69531 6.38672 1.20312 6.10547V6.14062C1.20312 7.93359 2.46875 9.41016 4.15625 9.76172C3.875 9.83203 3.52344 9.90234 3.20703 9.90234C2.96094 9.90234 2.75 9.86719 2.50391 9.83203C2.96094 11.3086 4.33203 12.3633 5.94922 12.3984C4.68359 13.3828 3.10156 13.9805 1.37891 13.9805C1.0625 13.9805 0.78125 13.9453 0.5 13.9102C2.11719 14.9648 4.05078 15.5625 6.16016 15.5625C12.9453 15.5625 16.6367 9.97266 16.6367 5.08594C16.6367 4.91016 16.6367 4.76953 16.6367 4.59375Z"
                                        fill="black" />
                                </svg>
                            </a>

                            <a href="">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.14062 16V5.48828H0.871094V16H4.14062ZM2.48828 4.08203C3.54297 4.08203 4.38672 3.20312 4.38672 2.14844C4.38672 1.12891 3.54297 0.285156 2.48828 0.285156C1.46875 0.285156 0.625 1.12891 0.625 2.14844C0.625 3.20312 1.46875 4.08203 2.48828 4.08203ZM16.3398 16H16.375V10.2344C16.375 7.42188 15.7422 5.24219 12.4375 5.24219C10.8555 5.24219 9.80078 6.12109 9.34375 6.92969H9.30859V5.48828H6.17969V16H9.44922V10.7969C9.44922 9.42578 9.69531 8.125 11.3828 8.125C13.0703 8.125 13.1055 9.67188 13.1055 10.9023V16H16.3398Z"
                                        fill="black" />
                                </svg>
                            </a>

                            <a href="">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.9688 6.42188C14.4414 6.42188 13.9844 6.63281 13.6328 6.98438C12.3672 6.10547 10.6797 5.54297 8.81641 5.50781L9.80078 1.11328L12.8945 1.81641C12.8945 2.55469 13.4922 3.1875 14.2656 3.1875C15.0391 3.1875 15.6719 2.55469 15.6719 1.78125C15.6719 1.00781 15.0391 0.375 14.2656 0.375C13.7383 0.375 13.2461 0.726562 13.0352 1.14844L9.58984 0.410156C9.41406 0.339844 9.27344 0.480469 9.20312 0.65625L8.14844 5.47266C6.28516 5.57812 4.59766 6.14062 3.36719 6.98438C3.01562 6.63281 2.52344 6.42188 1.99609 6.42188C0.0625 6.42188 -0.605469 9.05859 1.1875 9.9375C1.11719 10.2188 1.11719 10.5 1.11719 10.8164C1.11719 13.7695 4.42188 16.125 8.5 16.125C12.5781 16.125 15.918 13.7695 15.918 10.8164C15.918 10.5 15.8828 10.2188 15.8125 9.9375C17.5703 9.02344 16.9023 6.42188 14.9688 6.42188ZM4.03516 10.1133C4.03516 9.33984 4.66797 8.74219 5.44141 8.74219C6.17969 8.74219 6.8125 9.33984 6.8125 10.1133C6.8125 10.8867 6.17969 11.5195 5.44141 11.5195C4.66797 11.5195 4.03516 10.8867 4.03516 10.1133ZM11.5586 13.418C10.293 14.6836 6.67188 14.6836 5.40625 13.418C5.26562 13.2773 5.26562 13.0664 5.40625 12.9258C5.51172 12.8203 5.72266 12.8203 5.86328 12.9258C6.84766 13.9453 10.082 13.9453 11.1016 12.9258C11.207 12.8203 11.4531 12.8203 11.5586 12.9258C11.6992 13.0664 11.6992 13.2773 11.5586 13.418ZM11.5234 11.5195C10.7852 11.5195 10.1523 10.8867 10.1523 10.1133C10.1523 9.33984 10.7852 8.74219 11.5234 8.74219C12.2969 8.74219 12.9297 9.33984 12.9297 10.1133C12.9297 10.8867 12.2969 11.5195 11.5234 11.5195Z"
                                        fill="white" />
                                </svg>
                            </a>

                            <a href="">
                                <svg width="17" height="19" viewBox="0 0 17 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 11.5C12.1914 11.5 11.4531 11.7812 10.8906 12.2383L7.26953 9.98828C7.33984 9.77734 7.33984 9.53125 7.33984 9.25C7.33984 9.00391 7.33984 8.75781 7.26953 8.54688L10.8906 6.29688C11.4531 6.75391 12.1914 7 13 7C14.8633 7 16.375 5.52344 16.375 3.625C16.375 1.76172 14.8633 0.25 13 0.25C11.1016 0.25 9.625 1.76172 9.625 3.625C9.625 3.90625 9.625 4.15234 9.69531 4.36328L6.07422 6.61328C5.51172 6.15625 4.77344 5.875 4 5.875C2.10156 5.875 0.625 7.38672 0.625 9.25C0.625 11.1484 2.10156 12.625 4 12.625C4.77344 12.625 5.51172 12.3789 6.07422 11.9219L9.69531 14.1719C9.625 14.3828 9.625 14.6289 9.625 14.9102V14.875C9.625 16.7734 11.1016 18.25 13 18.25C14.8633 18.25 16.375 16.7734 16.375 14.875C16.375 13.0117 14.8633 11.5 13 11.5Z"
                                        fill="black" />
                                </svg>
                            </a>

                        </div>
{{--                        <div class="blog_single-part">--}}
{{--                            <div class="ul-li-part">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="" class="active">Technology</a></li>--}}
{{--                                    <li><a href="">10 min read</a></li>--}}
{{--                                    <li><a href="">19 march 2023</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h3>MSc in Mathematics and Foundations of Computer Science</h3>--}}
                        <div class="row">
                            <div class="col-md-10">
                                @if(!empty($pageDetails->tittle))
                                    <h3>{!! $pageDetails->tittle !!}</h3>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <a href="{{url('pages/program-apply/'.$pageDetails->page_id.'/'.$pageDetails->masters_program_id)}}" class="btn btn-info enroll_now" title="Enroll Courses">Apply Now</a>
                            </div>
                        </div>


                        <div class="controls">
                            <ul class="nav nav-tabs">
                                @if($pageDetails->aboutShow == 'Y')
                                    <li class="active"><a data-toggle="tab" href="#about">About</a>
                                @endif
                                @if($pageDetails->pedagogyShow == 'Y')
                                    <li><a data-toggle="tab" href="#pedagogy">Pedagogy</a></li>
                                @endif
                                @if($pageDetails->courseStructureShow == 'Y')
                                    <li><a data-toggle="tab" href="#cstructure">Course Structure</a></li>
                                @endif
                                @if($pageDetails->teachingMethodsShow == 'Y')
                                    <li><a data-toggle="tab" href="#tmethods">Teaching Methods</a></li>
                                @endif
                                @if($pageDetails->gradingPolicyShow == 'Y')
                                    <li><a data-toggle="tab" href="#gpolicy">Grading Policy</a></li>
                                @endif
                                @if($pageDetails->feesChargesShow == 'Y')
                                    <li><a data-toggle="tab" href="#fees">Fees and Charges</a></li>
                                @endif
                                @if($pageDetails->downloadShow == 'Y')
                                    <li><a data-toggle="tab" href="#download">Download</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="about" class="tab-pane row active">
                            <div class="row">
                                <div class="blog_single-part">
                                    @if($pageDetails->about !== null)
                                    {!! $pageDetails->about !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="pedagogy" class="tab-pane row">
                            <div class="row">
                                <div class="blog_single-part">
                                    @if($pageDetails->pedagogy !== null)
                                        {!! $pageDetails->pedagogy !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="cstructure" class="tab-pane row">
                            <div class="row">
                                <div class="blog_single-part">

                                    @if($pageDetails->courseStructure !== null)
                                        {!! $pageDetails->courseStructure !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="tmethods" class="tab-pane row">
                            <div class="row">
                                <div class="blog_single-part">
                                    @if($pageDetails->teachingMethods !== null)
                                        {!! $pageDetails->teachingMethods !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="gpolicy" class="tab-pane row">
                            <div class="row">
                                <div class="blog_single-part">
                                    @if($pageDetails->gradingPolicy !== null)
                                        {!! $pageDetails->gradingPolicy !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="fees" class="tab-pane">
                            <div class="row">
                                <div class="blog_single-part">
                                    @if($pageDetails->feesCharges !== null)
                                        {!! $pageDetails->feesCharges !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="download" class="tab-pane">
                            <div class="row">
                                <div class="blog_single-part">
                                    @if($pageDetails->download !== null)
                                        {!! $pageDetails->download !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3">
{{--                    asdfasdfa sdfas d--}}
                    @if(!empty($sidebarDetails))
                        <div class="sidebar">
                            @foreach($sidebarDetails as $sidebar)
                                <div class="sideBlock">
                                    <h4>{!! $sidebar->tittle !!}</h4>
                                    {!! $sidebar->description !!}
                                    @if($sidebar->button_status == 'Y')
                                        <a href="{{url('pages/program-apply/'.$sidebar->page_id.'/'.$sidebar->program_id)}}" class="btn btn-primary enroll_now" title="Enroll Courses">Apply Now</a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>

            </div>
            <!-- Row -->


            <!-- Row -->
        </div>
        <!-- Container -->
    </section>

    <!-- =========================== BLOG-SINGLE PART END =========================== -->
    <!-- =========================== FOOTER PART  START =========================== -->
@include('frontend.include.footer')
@endsection
