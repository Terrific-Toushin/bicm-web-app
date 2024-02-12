@extends('frontend.master')
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/recent_projects.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
<link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_single.css">
@section('content')
    <section id="UserInfoPage">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="userCardView">
                        <div class="card">
                            <div class="card-header">
                                @if(!empty($studentInfo) && $studentInfo->profile_pic != '')
                                    <img class="profile_img" src="{{ asset('/'.$studentInfo->profile_pic) }}" alt="student dp">
                                @else
                                    <img class="profile_img" src="{{ asset('/') }}/assets/frontend/images/imtiaz.png" alt="student dp">
                                @endif

                                <h3>{!! $studentInfo->first_name !!} {!! $studentInfo->last_name !!}</h3>
                            </div>
                            <div class="card-body">
                                <p class="mb-0"><strong class="pr-1">Student ID:</strong>{!! $studentInfo->id_number !!}</p>
                                <p class="mb-0"><strong class="pr-1">Course Enroll:</strong>{!! $studentSummery->course_count !!}</p>
                                <p class="mb-0"><strong class="pr-1">Payment Due:</strong>{!! $studentSummery->total_amount_due !!}</p>
                                <p class="mb-0"><strong class="pr-1">Paid:</strong>{!! $studentSummery->total_amount_paid !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="userinfoRight">
                        <ul class="userInfoTab  nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#userInfoView">User Information</a></li>
                            <li><a data-toggle="tab" href="#mycourseView">My course</a></li>
                        </ul>

                        <div class="userInfoTab_content tab-content">
                            <div id="userInfoView" class="tab-pane in active">
                                <h3>User Information</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="30%">Full Name</th>
                                        <td width="2%">:</td>
                                        <td>{!! $studentInfo->first_name !!} {!! $studentInfo->last_name !!}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">NID Number</th>
                                        <td width="2%">:</td>
                                        <td>{!! $studentInfo->nid_birth !!}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Mobile Number</th>
                                        <td width="2%">:</td>
                                        <td>{!! $studentInfo->contact_number !!}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">E-mail</th>
                                        <td width="2%">:</td>
                                        <td>{!! $studentInfo->email !!}</td>
                                    </tr>
                                </table>

                                <form class="form" method="POST" action="{{ route('studentUpdate') }}" enctype="multipart/form-data">
                                    @csrf
                                    <h3>Edit User Information</h3>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="First name" name="first_name" value="{!! $studentInfo->first_name !!}">
                                            <input type="hidden" name="id" value="{!! $studentInfo->id !!}">
                                        </div>
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="Last name" name="last_name" value="{!! $studentInfo->last_name !!}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="NID Number" name="nid_birth" value="{!! $studentInfo->nid_birth !!}">
                                        </div>
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="Mobile Number" name="contact_number" value="{!! $studentInfo->contact_number !!}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="file" required class="form-control choseFile" name="profile_pic" accept="image/*">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Update User Info</button>
                                </form>
                            </div>
                            <div id="mycourseView" class="tab-pane">
                                <h3>My Course</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Sl.</th>
                                            <th scope="col">Course Type</th>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Enroll Date</th>
                                            <th scope="col">payment status</th>
                                            <th scope="col">View Link</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($studentCourses as $key=>$studentCourse)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$studentCourse->page_name}}</td>
                                                <td>{{!empty($studentPrograms) && isset($studentPrograms[$studentCourse->program_id]) ? $studentPrograms[$studentCourse->program_id]->tittle : ""}}</td>
                                                <td>{{!empty($studentPrograms) && isset($studentPrograms[$studentCourse->program_id]) ? ($studentCourse->page_name == 'Certification Program' ? $studentCourse->payment_details_amount : $studentPrograms[$studentCourse->program_id]->amount) : "0"}}</td>
                                                <td>{{$studentCourse->created_at}}</td>
                                                <td>{{$paymentStatus[$studentCourse->paid_status]}}
                                                    @if($studentCourse->paid_status != 'p')
                                                        <form action="{{ route('studentPayNow') }}" method="POST">
{{--                                                        <form action="{{ url('/pay') }}" method="POST" class="needs-validation">--}}
                                                            @csrf
                                                            <input name="payment_id" value="{{$studentCourse->payment_id}}" type="hidden" />
                                                            <button class="btn btn-sm btn-primary-sm pull-right" type="submit" onclick="return confirm('Are you sure you want to pay this course?')"><i class="fa fa-dollar">Pay Now</i></button>
                                                        </form>
                                                    @endif</td>
                                                <td><a href="#">View</a></td>
                                            </tr>
                                        @endforeach

{{--                                        <tr>--}}
{{--                                            <td>01</td>--}}
{{--                                            <td>Application Form</td>--}}
{{--                                            <td>January 1, 2023</td>--}}
{{--                                            <td>Done</td>--}}
{{--                                            <td><a href="#">View</a></td>--}}
{{--                                        </tr>--}}

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =========================== FOOTER PART  START =========================== -->
    @include('frontend.include.footer')
@endsection
