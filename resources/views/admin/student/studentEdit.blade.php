@extends('admin.master')
@section('styleSheet')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/typeahead/typeahead.css">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
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
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Student Info</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
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
                    <div class="row">
                        <div class="col-md-12">
                            <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('storeStudent') }}" enctype="multipart/form-data" name="studentInfo">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Profile Image:</label>
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">

                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>

                                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">Select image </span>
                                                                        <span class="fileinput-exists">Change </span>
                                                                        <input type="file" class="form-control" name="profile_pic" placeholder="" accept="image/*">
                                                                    </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">Remove </a>
                                            </div>
                                        </div>



                                    </div>
                                    @if(!empty($studentInfo->profile_pic))
                                        <div class="col-md-6">
                                            <label class="col-md-2 control-label">Current Image</label>
                                            <img src="{{asset($studentInfo->profile_pic)}}" style="width: 200px; height: 150px;">
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">First Name: <span class="required">
                                                        * </span>
                                    </label>
                                    <div class="col-md-10">
                                        @if(!empty($studentInfo))
                                            <input type="hidden" class="form-control" name="id" value="{{$studentInfo->id}}" autocomplete="off">
                                        @endif
                                        <input type="text" class="form-control" name="first_name" value="{{!empty($studentInfo) ? $studentInfo->first_name : ''}}" placeholder="First Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Last Name: <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="last_name" value="{{!empty($studentInfo) ? $studentInfo->last_name : ''}}" placeholder="Last Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email: <span class="required"> * </span></label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="email" value="{{!empty($studentInfo) ? $studentInfo->email : ''}}" placeholder="Email Address" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">NID / Birth: <span class="required">
                                                        * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="nid_birth" value="{{!empty($studentInfo) ? $studentInfo->nid_birth : ''}}" placeholder="NID / Birth" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Mobile No: <span class="required">
                                                        * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="contact_number" value="{{!empty($studentInfo) ? $studentInfo->contact_number : ''}}" maxlength="11" placeholder="Mobile Number" autocomplete="off">
                                    </div>
                                </div>
                                @if(empty($studentInfo))
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Re-type Password</label>
                                        <div class="col-md-10">
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Status: <span class="required">
                                                        * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <select class="form-control input-medium select2me"
                                                data-placeholder="Status..." name="status">
                                            <option value=""></option>
                                            <option value="Y" {{!empty($studentInfo->status) && $studentInfo->status == 'Y' ? 'selected' : ''}}>Active</option>
                                            <option value="N" {{!empty($studentInfo->status) && $studentInfo->status == 'N' ? 'selected' : ''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success" style="float: right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(!empty($studentInfo))
                <div class="portlet box red">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Student Change Password
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('changePasswordStudent') }}" enctype="multipart/form-data" name="studentInfo">
                                    @csrf
                                    <input type="hidden" class="form-control" name="id" value="{{$studentInfo->id}}" autocomplete="off">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Re-type Password</label>
                                        <div class="col-md-10">
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" style="float: right">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- END PAGE CONTENT-->
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
    <script src="{{ asset('/') }}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"
            type="text/javascript"></script>
    <script src="{{ asset('/') }}/assets/admin/pages/scripts/components-form-tools.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="{{ asset('/') }}/assets/admin/pages/scripts/components-dropdowns.js"></script>
@endsection

@section('documentJquery')
    ComponentsFormTools.init();
{{--    <script>--}}

{{--    </script>--}}
@endsection
