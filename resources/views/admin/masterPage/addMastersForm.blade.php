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
                        <a href="{{route('mastersPage')}}">Masters Page</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Masters Form</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('aboutSettingPage') }}" enctype="multipart/form-data" name="aboutMenu">
                        @csrf
                        @if(!empty($formInfo))
                            <input type="hidden" class="form-control" name="about_settings_id" value="{{$formInfo->masters_form_id}}" placeholder="">
                        @endif
                        <div class="form-group">
                            <label class="col-md-2 control-label">Menu: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="menu_name" value="{{!empty($formInfo) ? $formInfo->menu_name : ''}}" placeholder="Page menu name" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Menu Position: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="position" value="{{!empty($formInfo) ? $formInfo->position : ''}}" placeholder="Page menu position" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="tittle" value="{{!empty($formInfo) ? $formInfo->tittle : ''}}" placeholder="Page Tittle" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Url:
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="url" value="{{!empty($formInfo->url) ? $formInfo->url : ''}}" placeholder="Page end url" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Description <span class="required"> * </span></label>
                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="description"
                                                          rows="4">{{!empty($formInfo->description) ? $formInfo->description : ''}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-4">
                                <select class="form-control input-medium select2me"
                                        data-placeholder="Status..." name="status">
                                    <option value=""></option>
                                    <option value="Y" {{!empty($formInfo->status) && $formInfo->status == 'Y' ? 'selected' : ''}}>Show</option>
                                    <option value="N" {{!empty($formInfo->status) && $formInfo->status == 'N' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" style="float: right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
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
@endsection
