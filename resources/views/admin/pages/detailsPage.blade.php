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
                        <a href="{{route('allPages')}}">Pages</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Page Details</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('pageSettings') }}" enctype="multipart/form-data" name="aboutMenu">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">Banner:</label>
                            <div class="col-md-2">
                                <div class="fileinput fileinput-new" data-provides="fileinput">

                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>

                                    <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">Select banner </span>
                                                                        <span class="fileinput-exists">Change </span>
                                                                        <input type="file" class="form-control" name="banner" placeholder="" accept="image/*">
                                                                    </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">Remove </a>
                                    </div>
                                </div>

                                @if(!empty($pageSettings))
                                    <input type="hidden" class="form-control" name="page_id" value="{{$pageSettings->page_id}}" placeholder="">
                                @endif

                            </div>
                            @if(!empty($pageSettings->banner))
                                <div class="col-md-3">
                                    <img src="{{asset($pageSettings->banner)}}" style="padding-left: 8%;width: 200px; height: 150px;">
                                    <label class="control-label">Current Banner</label>
                                </div>
                            @endif

                            <label class="col-md-1 control-label">Image:</label>
                            <div class="col-md-2">
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

                            </div>
                            @if(!empty($pageSettings->image))
                                <div class="col-md-3 pl-5">
                                    <img src="{{asset($pageSettings->image)}}" style="padding-left: 8%;width: 200px; height: 150px;">
                                    <label class="control-label">Current Image</label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Category: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-4">
                                <select id="category-id" class="form-control input-medium select2me"
                                        data-placeholder="Parent Menu..." name="parent_id">
                                    <option value=""></option>
                                    <option value="0" {{isset($pageSettings->parent_id) && $pageSettings->parent_id == 0 ? 'selected' : ''}}>Main Menu</option>
                                    @foreach($categoryMenus as $categoryMenu)
                                        <option value="{{$categoryMenu->menu_id}}" {{!empty($pageSettings->parent_id) && $pageSettings->parent_id == $categoryMenu->menu_id ? 'selected' : ''}}>{{$categoryMenu->menu_tittle}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('parent_id')) {{$errors->first('parent_id')}} @endif</span>
                            </div>
                            <label class="col-md-2 control-label">Menu: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-4">
                                <select id="page-menu" class="form-control input-medium select2me"
                                        data-placeholder="Menu..." name="menu_id">
                                    <option value=""></option>
                                    @if(!empty($pageMenus))
                                        @foreach($pageMenus as $pageMenu)
                                            <option value="{{$pageMenu->menu_id}}" {{!empty($pageSettings->menu_id) && $pageSettings->menu_id == $pageMenu->menu_id ? 'selected' : ''}}>{{$pageMenu->menu_tittle}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('menu_id')) {{$errors->first('menu_id')}} @endif</span>
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Page Name: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="page_name" value="{{!empty($pageSettings->page_name) ? $pageSettings->page_name : ''}}" placeholder="Page Name" autocomplete="off">
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('page_name')) {{$errors->first('page_name')}} @endif</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Heading: </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="heading" value="{{!empty($pageSettings->heading) ? $pageSettings->heading : ''}}" placeholder="Page Heading" autocomplete="off">
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('heading')) {{$errors->first('heading')}} @endif</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Page Type: <span class="required"> * </span>
                            </label>
                            <div class="col-md-2">
                                <select class="form-control input-medium select2me"
                                        data-placeholder="Page Type..." name="page_type">
                                    <option value=""></option>
                                    @foreach($pageTypes as $key => $pageType)
                                        <option value="{{$key}}" {{!empty($pageSettings->page_type) && $pageSettings->page_type == $key ? 'selected' : ''}}>
                                            {{$pageType}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('page_type')) {{$errors->first('page_type')}} @endif</span>
                            </div>
                            <label class="col-md-2 control-label">Sidebar: <span class="required"> * </span></label>
                            <div class="col-md-2 md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio1" value="Y" name="sidebar_status" class="md-radiobtn" {{!empty($pageSettings->sidebar_status) && $pageSettings->sidebar_status == 'Y' ? 'checked' : ''}}>
                                    <label for="radio1"><span class="inc"></span><span class="check"></span><span class="box"></span>yes</label>
                                </div>
                                <div class="md-radio has-error">
                                    <input type="radio" id="radio2" value="N" name="sidebar_status" class="md-radiobtn" {{!empty($pageSettings->sidebar_status) && $pageSettings->sidebar_status == 'N' ? 'checked' : ''}}>
                                    <label for="radio2"><span class="inc"></span><span class="check"></span><span class="box"></span>No</label>
                                </div>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('sidebar_status')) {{$errors->first('sidebar_status')}} @endif</span>
                            </div>
                            <label class="col-md-2 control-label">Form: <span class="required"> * </span></label>
                            <div class="col-md-2 md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio3" value="Y" name="form_status" class="md-radiobtn" {{!empty($pageSettings->form_status) && $pageSettings->form_status == 'Y' ? 'checked' : ''}} onclick="showFormSection('yes')">
                                    <label for="radio3"><span class="inc"></span><span class="check"></span><span class="box"></span>yes</label>
                                </div>
                                <div class="md-radio has-error">
                                    <input type="radio" id="radio4" value="N" name="form_status" class="md-radiobtn" {{!empty($pageSettings->form_status) && $pageSettings->form_status == 'N' ? 'checked' : ''}} onclick="showFormSection('no')">
                                    <label for="radio4"><span class="inc"></span><span class="check"></span><span class="box"></span>No</label>
                                </div>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('form_status')) {{$errors->first('form_status')}} @endif</span>
                            </div>
                        </div>
                        <div id="form-group" class="form-group" style="display: {{!empty($pageSettings->form_status) && $pageSettings->form_status == 'Y' ? '' : 'none'}}">
                            <label class="col-md-2 control-label">Form Group: <span class="required"> * </span></label>
                            <div class="col-md-10">
                                <ul class="list-inline">
                                    @if(count($FormGroupList) > 0)
                                        @foreach($FormGroupList as $idx=>$item)
                                            <li class="list-inline-item">
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--state-success">
                                                    <input data-vv-as="Form Group" name="form_group[]" type="checkbox" class="form-control m-input" value="{{ $item->id }}" {{!empty($pageSettings->form_group) && array_search($item->id, json_decode($pageSettings->form_group,true)) !== false ? 'checked' : ''}}>
                                                    <span></span> {{$item->name}}
                                                </label>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Short Description:
                            </label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="short_description">{{!empty($pageSettings->short_description) ? $pageSettings->short_description : ''}}</textarea>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('short_description')) {{$errors->first('short_description')}} @endif</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Description :</label>
                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="description"
                                                          rows="4">{{!empty($pageSettings->description) ? $pageSettings->description : ''}}</textarea>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('description')) {{$errors->first('description')}} @endif</span>
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
                                    <option value="Y" {{!empty($pageSettings->status) && $pageSettings->status == 'Y' ? 'selected' : ''}}>Show</option>
                                    <option value="N" {{!empty($pageSettings->status) && $pageSettings->status == 'N' ? 'selected' : ''}}>Inactive</option>
                                </select>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('status')) {{$errors->first('status')}} @endif</span>
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
    <script>
        function showFormSection() {
            // Get the div element by its ID
            var divElement = document.getElementById("form-group");

            // Toggle the display style
            if (divElement.style.display === 'none') {
                divElement.style.display = 'block';
            } else {
                divElement.style.display = 'none';
            }
        }
    </script>
@endsection

@section('documentJquery')
    ComponentsFormTools.init();
{{--    <script>--}}
        $("#category-id").change(function(){
            let url = "{{ route('pageMenu') }}";
            $('#page-menu').find('option').remove();
            $('#page-menu').val('');
            $.ajax({
                url: url,
                type: 'POST',
                data: { parent_id: $(this).val(), "_token": "{{ csrf_token() }}", },
                success: function(response) {
                    for(i=0; i<response.length; i++) {
                        $('#page-menu').append("<option value="+response[i].menu_id+">"+response[i].menu_tittle+"</option>");
                    }
                },
            });
        });
{{--    </script>--}}
@endsection
