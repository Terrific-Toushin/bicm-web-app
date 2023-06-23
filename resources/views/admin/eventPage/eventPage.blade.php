@extends('admin.master')
<link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('content')

    @if(session('successmessage'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('successmessage')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
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
                        <a href="{{route('eventsPage')}}">Event Page Edit</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-horizontal form-row-seperated" >
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Event Page
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">
                                                General </a>
                                        </li>
                                        <li>
                                            <a href="#tab_images" data-toggle="tab">
                                                Event List</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="form-body">
                                                <form method="POST" action="{{ route('eventPage') }}" enctype="multipart/form-data" name="eventSettings">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Banner: <span class="required">
                                                        * </span>
                                                        </label>
                                                        <div class="col-md-3">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">

                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>

                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">Select image </span>
                                                                        <span class="fileinput-exists">Change </span>
                                                                        <input type="file" class="form-control" name="banner" placeholder="" accept="image/*">
                                                                    </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">Remove </a>
                                                                </div>
                                                            </div>

                                                            @if(!empty($eventsSettings))
                                                                <input type="hidden" class="form-control" name="mastersSettingId" value="{{$eventsSettings->events_settings_id}}" placeholder="">
                                                            @endif

                                                        </div>
                                                        @if(!empty($eventsSettings))
                                                            <div class="col-md-6">
                                                                <label class="col-md-2 control-label">Current Banner</label>
                                                                <img src="{{asset($eventsSettings->banner)}}" style="width: 200px; height: 150px;">
                                                            </div>
                                                        @endif

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" name="tittle" value="{{!empty($eventsSettings) ? $eventsSettings->tittle : ''}}" placeholder="Page Tittle" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Short Description: <span class="required">
                                                        * </span>
                                                        </label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="shortDescription">{{!empty($eventsSettings) ? $eventsSettings->short_description : ''}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-success" style="float: right">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_images">
                                            {{--                                            <div class="alert alert-success margin-bottom-10">--}}
                                            {{--                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>--}}
                                            {{--                                                <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.--}}
                                            {{--                                            </div>--}}
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('newEventsProgram')}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add Event </a>
                                            </div>
                                            <div class="row">
                                                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
                                                </div>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Image
                                                    </th>
                                                    <th width="25%">
                                                        Tittle
                                                    </th>
                                                    <th width="8%">
                                                        Schedule
                                                    </th>
                                                    <th width="10%">
                                                        Duration
                                                    </th>
                                                    <th width="7%">
                                                        Author
                                                    </th>
                                                    <th width="7%">
                                                        Status
                                                    </th>
                                                    <th width="15%" >
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($eventInfo as $events)
                                                    <tr>
                                                        <td>
                                                            <a  href="#" class="fancybox-button" data-rel="fancybox-button">
                                                                <img class="img-responsive"  src="{{asset($events->image)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$events->tittle}}</td>
                                                        <td>{{$events->schedule}}</td>
                                                        <td>{{$events->duration}}</td>
                                                        <td>{{$events->author}}</td>
                                                        <td>{{$events->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('editEventsProgram', ['id' => $events->events_id]) }}" class="btn default btn-sm">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" class="btn default btn-sm">
                                                                <i class="fa fa-times"></i> Remove </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
@endsection
