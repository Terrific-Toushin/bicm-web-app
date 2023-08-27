@extends('admin.master')
<link rel="stylesheet" type="text/css"
      href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
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
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
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
    @if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
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
                        <a href="{{route('coursesPage')}}">Home Page Edit</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-horizontal form-row-seperated">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Home Page
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
                                                Service List</a>
                                        </li>
                                        <li>
                                            <a href="#tab_overview" data-toggle="tab">
                                                Overview List</a>
                                        </li>
                                        <li>
                                            <a href="#tab_why" data-toggle="tab">
                                                Why Bicm</a>
                                        </li>
                                        <li>
                                            <a href="#tab_project" data-toggle="tab">
                                                project</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
{{--                                            <div class="text-align-reverse margin-bottom-10">--}}
{{--                                                <a href="{{route('newSection', ['id' => 'new'])}}" class="btn yellow">--}}
{{--                                                    <i class="fa fa-plus"></i> Add Section </a>--}}
{{--                                            </div>--}}
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Image
                                                    </th>
                                                    <th width="8%">
                                                        Section
                                                    </th>
                                                    <th width="25%">
                                                        Tittle
                                                    </th>
                                                    <th width="7%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($homeSettings as $section)
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fancybox-button"
                                                               data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="{{asset($section->banner)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$section->section_name}}</td>
                                                        <td>{{$section->tittle}}</td>
                                                        <td>{{$section->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('newSection', ['id' => $section->home_settings_id]) }}"
                                                               class="btn default btn-sm">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_images">
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('newService',['id' => 'new'])}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add Service  </a>
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
                                                    <th width="7%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($homeService as $service)
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fancybox-button"
                                                               data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="{{asset($service->image)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$service->tittle}}</td>
                                                        <td>{{$service->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('newService', ['id' => $service->home_service_id]) }}"
                                                               class="btn default btn-sm">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" class="btn default btn-sm">
                                                                <i class="fa fa-times"></i> Remove </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_overview">
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('newOverview',['id' => 'new'])}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add Overview  </a>
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
                                                    <th width="7%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($homeOverview as $overview)
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fancybox-button"
                                                               data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="{{asset($overview->image)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$overview->tittle}}</td>
                                                        <td>{{$overview->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('newOverview', ['id' => $overview->home_overview_id]) }}"
                                                               class="btn default btn-sm">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" class="btn default btn-sm">
                                                                <i class="fa fa-times"></i> Remove </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_why">
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('newWhy',['id' => 'new'])}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add Why Chose  </a>
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
                                                    <th width="7%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($homeWhy as $why)
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fancybox-button"
                                                               data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="{{asset($why->image)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$why->tittle}}</td>
                                                        <td>{{$why->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('newWhy', ['id' => $why->home_why_id]) }}"
                                                               class="btn default btn-sm">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                            <a href="javascript:;" class="btn default btn-sm">
                                                                <i class="fa fa-times"></i> Remove </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab_project">
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('newProject',['id' => 'new'])}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add Project  </a>
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
                                                    <th width="7%">
                                                        Status
                                                    </th>
                                                    <th width="15%">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($homeProject as $project)
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fancybox-button"
                                                               data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="{{asset($project->image)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$project->tittle}}</td>
                                                        <td>{{$project->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('newProject', ['id' => $project->home_project_id]) }}"
                                                               class="btn default btn-sm">
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
    <script type="text/javascript"
            src="{{ asset('/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
@endsection
