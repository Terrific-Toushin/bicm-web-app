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
                        <a href="{{route('eventsPage')}}">Events Page</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Add New Course</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" method="POST" action="{{ route('addEventsProgram') }}" enctype="multipart/form-data" name="EventsProgram">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>New Evetnt
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <div class="tab-content no-space">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Image: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="file" class="form-control" name="image" placeholder="" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="tittle"
                                                       placeholder="Page Tittle">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Page Name: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control input-medium select2me"
                                                        data-placeholder="Page..." name="page_id">
                                                    <option value=""></option>
                                                    @foreach($pages as $page)
                                                        <option value="{{$page->page_id}}">{{$page->menu_tittle}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Schedule: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="schedule"
                                                       placeholder="Schedule Date Range">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Duration: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="duration"
                                                       placeholder="Duration Time">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Registration Fee:
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="amount"
                                                       placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Author Name:
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="author"
                                                       placeholder="Published by">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Short Description: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="shortDescription"></textarea>
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
                                                    <option value="Y">Show</option>
                                                    <option value="N">Hide</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="aboutShow" value="Y">
                                                About </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="about"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="pedagogyShow"
                                                                                         value="Y"> Pedagogy </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="pedagogy"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="courseStructureShow"
                                                                                         value="Y"> Event Structure
                                            </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="courseStructure"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="teachingMethodsShow"
                                                                                         value="Y"> Teaching Methods
                                            </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="teachingMethods"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="downloadShow"
                                                                                         value="Y"> Download </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="download"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success" style="float: right">Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
