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
                                <img class="profile_img" src="{{ asset('/') }}/assets/frontend/images/imtiaz.jpg" alt="student dp">
                                <h3>Imtiaz Sultan</h3>
                            </div>
                            <div class="card-body">
                                <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
                                <p class="mb-0"><strong class="pr-1">Course Enroll:</strong>4</p>
                                <p class="mb-0"><strong class="pr-1">Payment:</strong>15000</p>
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
                                        <td>Imtiaz Sultan</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">NID Number</th>
                                        <td width="2%">:</td>
                                        <td>199015138770001122</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Mobile Number</th>
                                        <td width="2%">:</td>
                                        <td>0168000000</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">E-mail</th>
                                        <td width="2%">:</td>
                                        <td>info@bicm.com</td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Password</th>
                                        <td width="2%">:</td>
                                        <td>*******</td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Profile <Picture></Picture></th>
                                        <td width="2%">:</td>
                                        <td><img class="profile_img" src="{{ asset('/') }}/assets/frontend/images/imtiaz.jpg" alt="student dp"></td>
                                    </tr>
                                </table>

                                <form class="form">
                                    <h3>Edit User Information</h3>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="NID Number">
                                        </div>
                                        <div class="col">
                                            <input type="text" required class="form-control" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="email" required class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="col">
                                            <input type="email" required class="form-control" placeholder="Confirm E-mail">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="password" required class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col">
                                            <input type="password" required class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="file" required class="form-control choseFile" >
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
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Enroll Date</th>
                                            <th scope="col">payment status</th>
                                            <th scope="col">View Link</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Application Form</td>
                                            <td>January 1, 2023</td>
                                            <td>Done</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Application Form</td>
                                            <td>January 1, 2023</td>
                                            <td>Done</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Application Form</td>
                                            <td>January 1, 2023</td>
                                            <td>Done</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Application Form</td>
                                            <td>January 1, 2023</td>
                                            <td>Done</td>
                                            <td><a href="#">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Application Form</td>
                                            <td>January 1, 2023</td>
                                            <td>Done</td>
                                            <td><a href="#">View</a></td>
                                        </tr>

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
