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
                        <a href="{{route('allMenu')}}">Menu</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Menu update</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form  class="form-horizontal form-row-seperated" method="POST" action="{{ route('updateMenu') }}" enctype="multipart/form-data" name="menu">
                        @csrf


                        @if(!empty($menus))
                            <input type="hidden" class="form-control" name="menu_id" value="{{$menus->menu_id}}" placeholder="">
                        @endif
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="menu_tittle" value="{{!empty($menus) ? $menus->menu_tittle : ''}}" placeholder="Menu Name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Category: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-4">
                                <select id="myNumberInput" class="form-control input-medium select2me"
                                        data-placeholder="Category..." name="parent_id" onchange="setMaxOrder()">
                                    <option value="0" {{!empty($menus->parent_id) && $menus->parent_id == 'Y' ? 'selected' : ''}}>Main Menu</option>
                                    @foreach($allMenu as $categoryMenu)
                                        <option value="{{$categoryMenu->menu_id}}" {{!empty($menus->parent_id) && $menus->parent_id == $categoryMenu->menu_id ? 'selected' : ''}}>
                                            {{$categoryMenu->menu_tittle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-2 control-label">Sub Menu: <span class="required">
                                                        * </span>
                            </label>
                            <div class="col-md-2 md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio3" value="Y" name="sub_menu" class="md-radiobtn" {{!empty($menus->sub_menu) && $menus->sub_menu == 'Y' ? 'checked' : ''}}>
                                    <label for="radio3"><span class="inc"></span><span class="check"></span><span class="box"></span>yes</label>
                                </div>
                                <div class="md-radio has-error">
                                    <input type="radio" id="radio4" value="N" name="sub_menu" class="md-radiobtn" {{!empty($menus->sub_menu) && $menus->sub_menu == 'N' ? 'checked' : ''}}>
                                    <label for="radio4"><span class="inc"></span><span class="check"></span><span class="box"></span>No</label>
                                </div>
                                <span class="help-block help-block-error" style="color: red;">@if($errors->has('sub_menu')) {{$errors->first('sub_menu')}} @endif</span>
                            </div>
                        </div>
{{--                        @php--}}
{{--                            --}}
{{--                            $specificKeyValues = array_column($allMenu, 'sort_order');--}}
{{--                            $commaSeparatedString = implode(', ', $specificKeyValues);--}}
{{--                        @endphp--}}
{{--                        @dump($specificKeyValues)--}}
                        <div class="form-group">
                            <label class="col-md-2 control-label">position:
                            </label>
                            <div class="col-md-10">
{{--                                <input type="text" class="form-control" name="sort_order" value="{{!empty($menus->sort_order) ? $menus->sort_order : ''}}" placeholder="Page order" autocomplete="off">--}}
                                <input id="positionData" type="text" class="form-control" name="sort_order" id="sort_order" pattern="\d*" minlength="2" maxlength="3" value="{{!empty($menus->sort_order) ? $menus->sort_order : ''}}" placeholder="Page order EX: 01" autocomplete="off" required onblur="validateInput()">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Url:
                            </label>
                            <div class="col-md-10">
{{--                                <input id="myUrlInput" type="text" class="form-control" name="url" value="{{!empty($menus->url) ? $menus->url : ''}}" pattern="[^/&]*" placeholder="Page end url" autocomplete="off" onblur="urlValidation()">--}}
                                <input id="myUrlInput" type="text" class="form-control" name="url" value="{{!empty($menus->url) ? $menus->url : ''}}" placeholder="Page end url" autocomplete="off">
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
                                    <option value="Y" {{!empty($menus->status) && $menus->status == 'Y' ? 'selected' : ''}}>Show</option>
                                    <option value="N" {{!empty($menus->status) && $menus->status == 'N' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" style="float: right">{{!empty($menus) ? 'Update' : 'Save'}}</button>
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
        function validateInput() {

            let inputElement = document.getElementById('myNumberInput').value;
            let positionData = document.getElementById('positionData');
            let oldData = "<?php echo !empty($menus->sort_order) ? $menus->sort_order : ''; ?>";
            console.log(oldData);
            if(oldData != positionData.value){
                let positionOrteder = <?php echo $menuPosition ?>;
                // console.log(positionData);
                // console.log(inputElement);
                // console.log(oldData);
                // console.log(positionOrteder[inputElement]);
                // Remove single quotes and split the numbersString
                let numbersArray = positionOrteder[inputElement].replace(/'/g, '').split(',');
                let numberToCheck = positionData.value;
// Check if numberToCheck is present in the array
                if (numbersArray.includes(numberToCheck)) {
                    // console.log(numberToCheck + " is present in the array.");
                    positionData.setCustomValidity(numberToCheck + " position already taken");
                }else {
                    positionData.setCustomValidity("");
                }
            }else {
                positionData.setCustomValidity("");
            }
        }

        function urlValidation(){
            var inputField = document.getElementById('myUrlInput');
            var forbiddenCharacters = /[&/]/g; // Regular expression for '&' and '/'

            if (forbiddenCharacters.test(inputField.value)) {
                inputField.setCustomValidity("Please avoid '/' and '&' characters.");
            } else {
                inputField.setCustomValidity("");
            }
        }
    </script>

@endsection

@section('documentJquery')
    ComponentsFormTools.init();
@endsection
