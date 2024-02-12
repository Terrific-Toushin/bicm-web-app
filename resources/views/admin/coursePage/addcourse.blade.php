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
                        <a href="{{route('coursesPage')}}">Courses Page</a>
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
                    <form class="form-horizontal form-row-seperated" method="POST" action="{{ route('addCoursesProgram') }}" enctype="multipart/form-data" name="coursesProgram">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>New Course
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
                                            <label class="col-md-2 control-label">Page Name: <span class="required">*</span>
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
{{--                                        <div class="form-group">--}}
{{--                                            <label class="col-md-2 control-label">Course Type: <span class="required">*</span>--}}
{{--                                            </label>--}}
{{--                                            <div class="col-md-10">--}}
{{--                                                <ul class="list-inline">--}}
{{--                                                    @foreach($courseTypes as $idx=>$courseType)--}}
{{--                                                        <li class="list-inline-item">--}}
{{--                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--state-success">--}}
{{--                                                                <input data-vv-as="Form Group" name="courseTypes[]" type="checkbox" class="form-control m-input" value="{{ $idx }}" >--}}
{{--                                                                <span></span> {{$courseType}}--}}
{{--                                                            </label>--}}
{{--                                                        </li>--}}
{{--                                                    @endforeach--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Date: </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="courseDate"  value=""
                                                       placeholder="Date Range" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Start Date: </label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control" name="startDate"  value=""
                                                       placeholder="Course Start Date" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">End Date: </label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control" name="endDate"  value=""
                                                       placeholder="Course End Date" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">No. of Classes/ Sessions: </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="classes"  value=""
                                                       placeholder="No. of Classes/ Sessions" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Weekly Schedule: </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="schedule"  value=""
                                                       placeholder="Schedule Date Range" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Total Hours: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="duration"  value=""
                                                       placeholder="Duration Time in hour" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Last Date of Registration: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="lastDate"  value=""
                                                       placeholder="Last Registration Date" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Amount: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="amount"  value="{{$course->amount}}"
                                                                                                       placeholder="Amount" autocomplete="off">
{{--                                                <div id="inputFields">--}}
{{--                                                    <!-- Initial input fields with no "Remove" button -->--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-5"><input type="text" class="col-md-6 form-control" name="amountName[]" placeholder="Amount Type" required /></div>--}}
{{--                                                        <div class="col-md-5"><input type="number" class="col-md-6 form-control" name="amount[]" placeholder="amount" required /></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
{{--                                            <div class="col-md-2">--}}
{{--                                                <button type="button" class="btn btn-primary" onclick="addFields()">Add More</button>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">venue :
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="venue"  value=""
                                                       placeholder="Venue Address" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">short Description :
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="shortDescription"  value=""
                                                       placeholder="short Description" autocomplete="off">
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
                                            <label class="control-label col-md-2"><input id="aboutCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="aboutShow" value="Y" onclick="toggleDiv('aboutCheck','aboutDiv')">
                                                About </label>
                                            <div id="aboutDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="aboutHeading" placeholder="About Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="about"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="pedagogyCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="pedagogyShow"
                                                                                         value="Y" onclick="toggleDiv('pedagogyCheck','pedagogyDiv')"> Pedagogy </label>
                                            <div id="pedagogyDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="pedagogyHeading" placeholder="Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="pedagogy"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="courseStructureCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="courseStructureShow"
                                                                                         value="Y" onclick="toggleDiv('courseStructureCheck','courseStructureDiv')"> Course Structure
                                            </label>
                                            <div id="courseStructureDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="courseHeading" placeholder="Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="courseStructure"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="teachingMethodsCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="teachingMethodsShow"
                                                                                         value="Y" onclick="toggleDiv('teachingMethodsCheck','teachingMethodsDiv')"> Teaching Methods
                                            </label>
                                            <div id="teachingMethodsDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="teachingHeading" placeholder="Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="teachingMethods"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="gradingPolicyCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="gradingPolicyShow"
                                                                                         value="Y" onclick="toggleDiv('gradingPolicyCheck','gradingPolicyDiv')"> Grading Policy
                                            </label>
                                            <div id="gradingPolicyDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="gradingPolicyHeading" placeholder="Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="gradingPolicy"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="feesChargesCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="feesChargesShow"
                                                                                         value="Y" onclick="toggleDiv('feesChargesCheck','feesChargesDiv')"> Fees and Charges
                                            </label>
                                            <div id="feesChargesDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="feesChargesHeading" placeholder="Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="feesCharges"
                                                          rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="downloadCheck" type="checkbox" class="icheck"
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="downloadShow"
                                                                                         value="Y" onclick="toggleDiv('downloadCheck','downloadDiv')"> Download </label>
                                            <div id="downloadDiv" class="col-md-10" style="display: none">
                                                <input type="text" class="form-control" name="downloadHeading" placeholder="Heading" autocomplete="off">
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
    <script>
        function toggleDiv(checkboxId,div) {
            var checkbox = document.getElementById(checkboxId);
            var div = document.getElementById(div);

            if (checkbox.checked) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
        function addFields() {
            var inputFields = document.getElementById("inputFields");

            var newFields = document.createElement("div");
            newFields.classList.add("row");
            newFields.innerHTML = `
        <div class="col-md-5"><input type="text" class="form-control" name="amountName[]" placeholder="Amount Type" required /></div>
        <div class="col-md-5"><input type="number" class="form-control" name="amount[]" placeholder="Amount" required /></div>
        <div class="col-md-2"><button type="button" class="btn btn-danger" onclick="removeFields(this)">Remove</button></div>
    `;

            inputFields.appendChild(newFields);
        }

        function removeFields(button) {
            var inputFields = document.getElementById("inputFields");
            var parentDiv = button.closest(".row");
            inputFields.removeChild(parentDiv);
        }
    </script>
@endsection

@section('documentJquery')
    ComponentsFormTools.init();
@endsection
