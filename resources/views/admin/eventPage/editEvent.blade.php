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
                        <a href="{{route('eventsPage')}}">Event Page</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Update Event</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" method="POST" action="{{ route('updateEventsProgram') }}" enctype="multipart/form-data" name="event">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Update Event
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
                                            <div class="col-md-3">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>

                                                    <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">Select image </span>
                                                                        <span class="fileinput-exists">Change </span>
                                                                        <input type="file" class="form-control" name="image" placeholder="" accept="image/*">
                                                                    </span>
                                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">Remove </a>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="events_id" value="{{$event->events_id}}"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="col-md-2 control-label">Current Image</label>
                                                <img src="{{asset($event->image)}}" style="width: 200px; height: 150px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="tittle" value="{{$event->tittle}}"
                                                       placeholder="Page Tittle" autocomplete="off">
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
                                                        <option value="{{$page->page_id}}" {{$event->page_id == $page->page_id ? 'selected' : ''}}>{{$page->menu_tittle}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Schedule: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="schedule"  value="{{$event->schedule}}"
                                                       placeholder="Schedule Date Range" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Month: <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control input-medium select2me"
                                                        data-placeholder="Month..." name="month">
                                                    <option value=""></option>
                                                    <option value="January" {{$event->month == 'January' ? 'selected' : ''}}>January</option>
                                                    <option value="February" {{$event->month == 'February' ? 'selected' : ''}}>February</option>
                                                    <option value="March" {{$event->month == 'March' ? 'selected' : ''}}>March</option>
                                                    <option value="April" {{$event->month == 'April' ? 'selected' : ''}}>April</option>
                                                    <option value="May" {{$event->month == 'May' ? 'selected' : ''}}>May</option>
                                                    <option value="June" {{$event->month == 'June' ? 'selected' : ''}}>June</option>
                                                    <option value="July" {{$event->month == 'July' ? 'selected' : ''}}>July</option>
                                                    <option value="August" {{$event->month == 'August' ? 'selected' : ''}}>August</option>
                                                    <option value="September" {{$event->month == 'September' ? 'selected' : ''}}>September</option>
                                                    <option value="October" {{$event->month == 'October' ? 'selected' : ''}}>October</option>
                                                    <option value="November" {{$event->month == 'November' ? 'selected' : ''}}>November </option>
                                                    <option value="December" {{$event->month == 'December' ? 'selected' : ''}}>December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Year: <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="year" max="4" value="{{$event->year}}" placeholder="Event year 4 digit">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Duration: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="duration"  value="{{$event->duration}}"
                                                       placeholder="Duration Time" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Fee: </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="amount"  value="{{$event->amount}}"
                                                       placeholder="Amount" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Author: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="author"  value="{{$event->author}}"
                                                       placeholder="Amount" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Short Description: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="shortDescription">{{$event->shortDescription}}</textarea>
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
                                                    <option value="Y" {{$event->status == 'Y' ? 'selected' : ''}}>Show</option>
                                                    <option value="N" {{$event->status == 'N' ? 'selected' : ''}}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck" {{$event->aboutShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="aboutShow" value="Y">
                                                About </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="about"
                                                          rows="4">{{$event->about}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck" {{$event->pedagogyShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="pedagogyShow"
                                                                                         value="Y"> Pedagogy </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="pedagogy"
                                                          rows="4">{{$event->pedagogy}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck" {{$event->courseStructureShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="courseStructureShow"
                                                                                         value="Y"> Event Structure
                                            </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="courseStructure"
                                                          rows="4">{{$event->courseStructure}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck" {{$event->teachingMethodsShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="teachingMethodsShow"
                                                                                         value="Y"> Teaching Methods
                                            </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="teachingMethods"
                                                          rows="4">{{$event->teachingMethods}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input type="checkbox" class="icheck" {{$event->downloadShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="downloadShow"
                                                                                         value="Y"> Download </label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="download"
                                                          rows="4">{{$event->download}}</textarea>
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
