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
                        <a href="{{route('sideBar')}}">Side Bar Page</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Side Bar</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('storeSideBar') }}" enctype="multipart/form-data" name="aboutMenu">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image:</label>
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



                            </div>
                            @if(!empty($aboutSettings->banner))
                                <div class="col-md-6">
                                    <label class="col-md-2 control-label">Current Image</label>
                                    <img src="{{asset($aboutSettings->banner)}}" style="width: 200px; height: 150px;">
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Position: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                @if(!empty($aboutSettings))
                                    <input type="hidden" class="form-control" name="about_settings_id" value="{{$aboutSettings->about_settings_id}}" placeholder="">
                                @endif
                                <input type="number" class="form-control" name="position" value="{{!empty($aboutSettings) ? $aboutSettings->position : ''}}" placeholder="position" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="tittle" value="{{!empty($aboutSettings) ? $aboutSettings->tittle : ''}}" placeholder="Side Bar Tittle" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Page: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-4">
                                <select id="page-id" class="form-control input-medium select2me"
                                        data-placeholder="Page..." name="page_id" required onchange="">
                                    <option value=""></option>
                                    @foreach($pages as $page)
                                        <option value="{{$page->page_id}}" data-type="{{$page->page_type}}" {{!empty($aboutSettings) && $aboutSettings->page_id == $page->page_id ? 'selected' : ''}}>{{$page->menu_tittle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-2 control-label">Button: <span class="required"> * </span></label>
                            <div class="col-md-4 md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio3" value="Y" name="button_status" class="md-radiobtn" {{!empty($aboutSettings) && $aboutSettings->button_status == 'Y' ? 'checked' : ''}} onclick="showProgramDropdown('yes')">
                                    <label for="radio3"><span class="inc"></span><span class="check"></span><span class="box"></span>yes</label>
                                </div>
                                <div class="md-radio has-error">
                                    <input type="radio" id="radio4" value="N" name="button_status" class="md-radiobtn" {{!empty($aboutSettings) && $aboutSettings->button_status == 'N' ? 'checked' : ''}} onclick="showProgramDropdown('no')">
                                    <label for="radio4"><span class="inc"></span><span class="check"></span><span class="box"></span>No</label>
                                </div>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('button_status')) {{$errors->first('button_status')}} @endif</span>
                            </div>
                        </div>
                        <div id="program-group" class="form-group" style="display: {{!empty($aboutSettings) && $aboutSettings->button_status == 'Y' ? '' : 'none'}}">
                            <label class="col-md-2 control-label">Program: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <select id="program-id" class="form-control input-medium select2me"
                                        data-placeholder="Program..." name="program_id">
                                    @if(!empty($aboutSettings) && !empty($aboutSettings->program_id))
                                        <option value="{{$aboutSettings->program_id}}">selected program</option>
                                    @else
                                        <option value=""></option>
                                    @endif

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Description <span class="required"> * </span></label>
                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" name="description"
                                                          rows="4">{{!empty($aboutSettings->description) ? $aboutSettings->description : ''}}</textarea>
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
                                    <option value="Y" {{!empty($aboutSettings->status) && $aboutSettings->status == 'Y' ? 'selected' : ''}}>Show</option>
                                    <option value="N" {{!empty($aboutSettings->status) && $aboutSettings->status == 'N' ? 'selected' : ''}}>Inactive</option>
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
    <script>
        function showProgramDropdown(show) {
            // Get the div element by its ID
            let divElement = document.getElementById("program-group");

            // Toggle the display style

            if (show == 'yes' && divElement.style.display === 'none') {
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
        $("#page-id").change(function(){
            let url = "{{ route('programMenu') }}";
            let page_type = $(this).find(':selected').data('type');
            $('#program-id').find('option').remove();
            $('#program-id').val('');
            $.ajax({
                url: url,
                type: 'POST',
                data: { page_id: $(this).val(), "page_type": page_type, "_token": "{{ csrf_token() }}", },
                success: function(response) {
                    for(i=0; i<response.length; i++) {
                        $('#program-id').append("<option value="+response[i].program_id+">"+response[i].tittle+"</option>");
                    }
                },
            });
        });
{{--    </script>--}}
@endsection
