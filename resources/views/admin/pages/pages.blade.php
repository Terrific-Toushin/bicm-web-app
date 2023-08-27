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



    @if(Session::has('error'))
        <script type="text/javascript">
            jQuery(document).ready(function(){
                $.bootstrapGrowl('{{ Session::get('error') }}', {
                    ele: 'body', // which element to append to
                    type: 'warning', // (null, 'info', 'danger', 'success', 'warning')
                    offset: {
                        from: 'top',
                        amount: 50
                    }, // 'top', or 'bottom'
                    align: 'right', // ('left', 'right', or 'center')
                    width: 'auto', // (integer, or 'auto')
                    delay: 5000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                    allow_dismiss: 1, // If true then will display a cross to close the popup.
                    stackup_spacing: 10 // spacing between consecutively stacked growls.
                });
            });
        </script>
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
                        <a href="{{route('allPages')}}">Pages</a>
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
                                    <i class="fa fa-shopping-cart"></i>All Pages {{ Session::get('success') }}
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_general" data-toggle="tab">
                                                Page List </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content no-space">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="text-align-reverse margin-bottom-10">
                                                <a href="{{route('pageDetails', ['id' => 'new'])}}" class="btn yellow">
                                                    <i class="fa fa-plus"></i> Create Page </a>
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr role="row" class="heading">
                                                    <th width="8%">
                                                        Banner
                                                    </th>
                                                    <th width="10%">
                                                        Page Name
                                                    </th>
                                                    <th width="10%">
                                                        Parent Menu
                                                    </th>
                                                    <th width="15%">
                                                        Menu Name
                                                    </th>
                                                    <th width="15%">
                                                        Page Type
                                                    </th>
                                                    <th width="8%">
                                                        Form
                                                    </th>
                                                    <th width="7%">
                                                        Sidebar
                                                    </th>
                                                    <th width="7%">
                                                        status
                                                    </th>
                                                    <th width="15%">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pageSettings as $pages)
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="fancybox-button"
                                                               data-rel="fancybox-button">
                                                                <img class="img-responsive"
                                                                     src="{{asset($pages->banner)}}" alt="">
                                                            </a>
                                                        </td>
                                                        <td>{{$pages->page_name}}</td>
                                                        <td>{{$menus[$pages->parent_id]}}</td>
                                                        <td>{{$menus[$pages->menu_id]}}</td>
                                                        <td>{{!empty($pages->page_type) ? $pageTypes[$pages->page_type] : $pages->page_type}}</td>
                                                        <td>{{$pages->form_status == 'Y' ? 'Yes' : 'N/A'}}</td>
                                                        <td>{{$pages->sidebar_status == 'Y' ? 'Yes' : 'N/A'}}</td>
                                                        <td>{{$pages->status == 'Y' ? "show" : "Hide" }}</td>
                                                        @if($pages->page_type == 'home')
                                                            <td>
                                                                <a href="{{route('homePage')}}"
                                                                   class="btn default btn-sm">
                                                                    <i class="fa fa-edit"></i> Edit </a>
                                                            </td>
                                                        @else
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <a href="{{ route('pageDetails', ['id' => $pages->page_id]) }}"
                                                                           class="btn default btn-sm">
                                                                            <i class="fa fa-edit"></i> Edit </a>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <form action="{{ route('deletePage', ['id' => $pages->page_id]) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn default btn-sm" onclick="return confirm('Are you sure you want to delete this page?')"><i class="fa fa-trash"></i> Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        @endif
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
    <script type="text/javascript" src="{{ asset('/') }}/assets/global/plugins/bootstrap-growl/jquery.bootstrap-growl.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}/assets/admin/pages/scripts/ui-bootstrap-growl.js"></script>
    @if(Session::has('success'))
        <script type="text/javascript">
            $.bootstrapGrowl('Page info Save successfully', {
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


