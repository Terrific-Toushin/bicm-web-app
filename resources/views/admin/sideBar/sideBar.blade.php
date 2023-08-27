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
                        <a href="{{route('sideBar')}}">Side Bar Edit</a>
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
                                    <i class="fa fa-shopping-cart"></i>Side Bar
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">
                                                SIde Bar List </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('newSideBar', ['id' => 'new'])}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Add Side Bar</a>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Position
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
                                                @foreach($aboutSettings as $about)
                                                    <tr>
                                                        <td>{{$about->position}}</td>
                                                        <td>{{$about->tittle}}</td>
                                                        <td>{{$about->status == 'Y' ? "show" : "Hide" }}</td>
                                                        <td>
                                                            <a href="{{ route('newSideBar', ['id' => $about->about_settings_id]) }}"
                                                               class="btn default btn-sm">
                                                                <i class="fa fa-edit"></i> Edit </a>
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
