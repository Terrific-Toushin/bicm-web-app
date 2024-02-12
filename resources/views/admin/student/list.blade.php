@extends('admin.master')
<link rel="stylesheet" type="text/css"
      href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
@section('styleSheet')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/typeahead/typeahead.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{route('home')}}">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="{{route('studentList')}}">Student List</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            @if(session('message'))
                <div class="alert alert-success alert-dismissible show" role="alert">
                    {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- BEGIN PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Student Info
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr role="row" class="heading">
                                <th width="8%">
                                    Student ID
                                </th>
                                <th width="15%">
                                    First Name
                                </th>
                                <th width="15%">
                                    Last Name
                                </th>
                                <th width="7%">
                                    Contact
                                </th>
                                <th width="7%">
                                    Email
                                </th>
                                <th width="7%">
                                    Enrolled Course Count
                                </th>
                                <th width="7%">
                                    Status
                                </th>
                                <th width="20%">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allStudent as $student)
                            <tr>
                                <td>
                                    {{$student->id_number}}
                                </td>
                                <td>
                                    {{$student->first_name}}
                                </td>
                                <td>
                                    {{$student->last_name}}
                                </td>
                                <td>
                                    {{$student->contact_number}}
                                </td>
                                <td>
                                    {{$student->email}}
                                </td>
                                <td>
{{--                                    @dump($studentData[$student->id]);--}}
                                    {!! !empty($studentData) && !empty($studentData[$student->id]) ? $studentData[$student->id] : 'N/A' !!}
                                </td>
                                <td>
                                    {{$student->status == 'Y' ? 'Active' : 'Inactive'}}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3"><a class="btn default btn-sm" data-toggle="modal" href="#responsive-{{$student->id}}">View </a></div>
                                        <div class="col-md-3" style="margin-right: 5%;"><a href="{{ route('addStudent',['id'=>$student->id]) }}" class="btn default btn-sm"><i class="fa fa-edit"></i> Edit </a></div>
                                        <div class="col-md-5">
                                            <form action="{{ route('deleteStudent', ['id' => $student->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn default btn-sm" onclick="return confirm('Are you sure you want to delete this student?')"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <!-- responsive -->
                    @foreach($allStudent as $students)
                        <div id="responsive-{{$students->id}}" class="modal fade" tabindex="-1" data-width="960">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Student Details</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="portlet light profile-sidebar-portlet">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic">
                                                <img src="{{asset($students->profile_pic)}}" class="img-responsive" alt="">
                                            </div>
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name : {{$students->first_name}}</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name : {{$students->last_name}}</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mobile Number : {{$students->contact_number}}</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">NID Number : {{$students->nid_birth}}</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email : {{$students->email}}</label>
                                                    </div>
                                                </div>
                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
@endsection
@section('customJs')
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/fuelux/js/spinner.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/typeahead/typeahead.bundle.min.js"
            type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-growl/jquery.bootstrap-growl.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/admin/pages/scripts/components-form-tools.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="{{ asset('/') }}/assets/admin/pages/scripts/components-dropdowns.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    @if(Session::has('success'))
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
            $.bootstrapGrowl('{{ Session::get('success') }}', {
                ele: 'body', // which element to append to
                type: 'info', // (null, 'info', 'danger', 'success', 'warning')
                offset: {
                    from: 'top',
                    amount: 50
                }, // 'top', or 'bottom'
                align: 'right', // ('left', 'right', or 'center')
                width: 'auto', // (integer, or 'auto')
                delay: 10000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                allow_dismiss: 1, // If true then will display a cross to close the popup.
                stackup_spacing: 10 // spacing between consecutively stacked growls.
            });
        </script>
    @endif
@endsection
@section('documentJquery')
    {{--    <script>--}}

    {{--    </script>--}}
@endsection
