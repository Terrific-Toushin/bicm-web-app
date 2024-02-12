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
                        <a href="{{route('userList')}}">User List</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">User Info</a>
                    </li>
                </ul>
            </div>
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>User Info
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
                            <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('storeUser') }}" enctype="multipart/form-data" name="UserInfo">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name: <span class="required">
                                                                * </span>
                                    </label>
                                    <div class="col-md-10">
                                        @if(!empty($userInfo))
                                            <input type="hidden" class="form-control" name="id" value="{{$userInfo->id}}" autocomplete="off">
                                        @endif
                                        <input type="text" class="form-control" name="name" value="{{!empty($userInfo) ? $userInfo->name : ''}}" placeholder="Name" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Email: <span class="required"> * </span></label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="email" value="{{!empty($userInfo) ? $userInfo->email : ''}}" placeholder="Email Address" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">User Type: <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-2">
                                        <select class="form-control input-medium select2me"
                                                data-placeholder="Page Type..." name="user_type">
                                            <option value=""></option>
                                            @foreach($userType as $key => $type)
                                                <option value="{{$key}}" {{!empty($userInfo->user_type) && $userInfo->user_type == $key ? 'selected' : ''}}>
                                                    {{$type}}</option>
                                            @endforeach
                                        </select>
                                        <span class="help-block help-block-error" style="color: red;">@if($errors->has('page_type')) {{$errors->first('page_type')}} @endif</span>
                                    </div>
                                </div>
                                <div id="form-group" class="form-group">
                                    <label class="col-md-2 control-label">Permissions: <span class="required"> * </span></label>
                                    <div class="col-md-10">
                                        <ul class="list-inline">
                                            @foreach($userPrivileges as $idx=>$item)
                                                <li class="list-inline-item">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--state-success">
                                                        <input data-vv-as="Form Group" name="privileges[]" type="checkbox" class="form-control m-input" value="{{ $idx }}" {{!empty($userInfo->privileges) && ($userInfo->privileges != "null") && array_search($idx, json_decode($userInfo->privileges,true)) !== false ? 'checked' : ''}}>
                                                        <span></span> {{$item}}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @if(empty($userInfo))
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
                                            <option value="Y" {{!empty($userInfo->status) && $userInfo->status == 'Y' ? 'selected' : ''}}>Active</option>
                                            <option value="N" {{!empty($userInfo->status) && $userInfo->status == 'N' ? 'selected' : ''}}>Inactive</option>
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
            <!-- END PAGE CONTENT-->
            @if(!empty($userInfo) && Auth::user()->id == $userInfo->id)
                <div class="portlet box red">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Change Password
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
                                <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('changePasswordUser') }}" enctype="multipart/form-data" name="userInfo">
                                    @csrf
                                    <input type="hidden" class="form-control" name="id" value="{{$userInfo->id}}" autocomplete="off">
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
