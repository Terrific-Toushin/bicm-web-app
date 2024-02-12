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
                        <a href="{{route('coursesPage')}}">Course Page</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Update Course</a>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" method="POST" action="{{ route('updateCoursesProgram') }}" enctype="multipart/form-data" name="course">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-shopping-cart"></i>Update course
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
                                                <input type="hidden" name="course_id" value="{{$course->course_id}}"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="col-md-2 control-label">Current Image</label>
                                                <img src="{{asset($course->image)}}" style="width: 200px; height: 150px;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tittle: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="tittle" value="{{$course->tittle}}"
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
                                                        <option value="{{$page->page_id}}" {{$course->page_id == $page->page_id ? 'selected' : ''}}>{{$page->menu_tittle}}</option>
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
{{--                                                                <input data-vv-as="Form Group" name="courseTypes[]" type="checkbox" class="form-control m-input" value="{{ $idx }}" {{!empty($course->courseTypes) && ($course->courseTypes != "null") && array_search($idx, json_decode($course->courseTypes,true)) !== false ? 'checked' : ''}}>--}}
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
                                                <input type="text" class="form-control" name="courseDate"  value="{{$course->courseDate}}"
                                                       placeholder="Date Range" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Start Date: </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" data-date-format="YYYY-MM-DD"  name="startDate"  value="{{$course->startDate}}"
                                                       placeholder="dd-mm-yyyy" max="2050-12-31" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">End Date: </label>
                                            <div class="col-md-3">
                                                <input type="date" class="form-control" data-date-format="YYYY-MM-DD" name="endDate"  value="{{$course->endDate}}"
                                                       placeholder="dd-mm-yyyy" max="2050-12-31" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">No. of Classes/ Sessions: </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="classes"  value="{{$course->classes}}"
                                                       placeholder="No. of Classes/ Sessions" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Weekly Schedule: </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="schedule"  value="{{$course->schedule}}"
                                                       placeholder="Schedule Date Range" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Total Hours: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="duration"  value="{{$course->duration}}"
                                                       placeholder="Duration Time in hour" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Last Date of Registration: <span class="required">
                                                        * </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="lastDate"  value="{{$course->lastDate}}"
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
{{--                                                    @if($course->amount)--}}
{{--                                                        @php $amountArray = json_decode($course->amount); $i = 0; @endphp--}}
{{--                                                        @foreach($amountArray as $amountKey => $amountValue)--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-md-5"><input type="text" class="col-md-6 form-control" name="amountName[]" placeholder="Amount Type" value="{{$amountValue}}" required /></div>--}}
{{--                                                                <div class="col-md-5"><input type="number" class="col-md-6 form-control" name="amount[]" placeholder="amount" value="{{$amountKey}}" required /></div>--}}
{{--                                                                @if($i > 0)--}}
{{--                                                                    <div class="col-md-2"><button type="button" class="btn btn-danger" onclick="removeFields(this)">Remove</button></div>--}}
{{--                                                                @endif--}}
{{--                                                            </div>--}}
{{--                                                            @php $i++; @endphp--}}
{{--                                                        @endforeach--}}

{{--                                                    @else--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-md-5"><input type="text" class="col-md-6 form-control" name="amountName[]" placeholder="Amount Type" required /></div>--}}
{{--                                                            <div class="col-md-5"><input type="number" class="col-md-6 form-control" name="amount[]" placeholder="amount" required /></div>--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}

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
                                                <input type="text" class="form-control" name="venue"  value="{{$course->venue}}"
                                                       placeholder="Venue Address" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">short Description :
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="shortDescription"  value="{{$course->shortDescription}}"
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
                                                    <option value="Y" {{$course->status == 'Y' ? 'selected' : ''}}>Show</option>
                                                    <option value="N" {{$course->status == 'N' ? 'selected' : ''}}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="aboutCheck" type="checkbox" class="icheck" {{$course->aboutShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="aboutShow" value="Y" onclick="toggleDiv('aboutCheck','aboutDiv')">
                                                About </label>
                                            <div id="aboutDiv" class="col-md-10" style="display: {{$course->aboutShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="aboutHeading"  value="{{$course->aboutHeading}}"
                                                       placeholder="About Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="about"
                                                          rows="4">{{$course->about}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="pedagogyCheck" type="checkbox" class="icheck" {{$course->pedagogyShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="pedagogyShow"
                                                                                         value="Y" onclick="toggleDiv('pedagogyCheck','pedagogyDiv')"> Pedagogy </label>
                                            <div id="pedagogyDiv" class="col-md-10" style="display: {{$course->pedagogyShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="pedagogyHeading"  value="{{$course->pedagogyHeading}}"
                                                       placeholder="Pedagogy Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="pedagogy"
                                                          rows="4">{{$course->pedagogy}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="courseStructureCheck" type="checkbox" class="icheck" {{$course->courseStructureShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="courseStructureShow"
                                                                                         value="Y" onclick="toggleDiv('courseStructureCheck','courseStructureDiv')"> Course Structure
                                            </label>
                                            <div id="courseStructureDiv" class="col-md-10" style="display: {{$course->courseStructureShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="courseHeading"  value="{{$course->courseHeading}}"
                                                       placeholder="Course Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="courseStructure"
                                                          rows="4">{{$course->courseStructure}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="teachingMethodsCheck" type="checkbox" class="icheck" {{$course->teachingMethodsShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="teachingMethodsShow"
                                                                                         value="Y" onclick="toggleDiv('teachingMethodsCheck','teachingMethodsDiv')"> Teaching Methods
                                            </label>
                                            <div id="teachingMethodsDiv" class="col-md-10" style="display: {{$course->teachingMethodsShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="teachingHeading"  value="{{$course->teachingHeading}}"
                                                       placeholder="Teaching Methods Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="teachingMethods"
                                                          rows="4">{{$course->teachingMethods}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="gradingPolicyCheck" type="checkbox" class="icheck" {{$course->gradingPolicyShow == 'N' ? 'selected' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="gradingPolicyShow"
                                                                                         value="Y"  onclick="toggleDiv('gradingPolicyCheck','gradingPolicyDiv')"> Grading Policy
                                            </label>
                                            <div id="gradingPolicyDiv" class="col-md-10" style="display: {{$course->gradingPolicyShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="gradingPolicyHeading"  value="{{$course->gradingPolicyHeading}}"
                                                       placeholder="Grading Policy Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="gradingPolicy"
                                                          rows="4">{{$course->gradingPolicy}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="feesChargesCheck" type="checkbox" class="icheck" {{$course->feesChargesShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="feesChargesShow"
                                                                                         value="Y" onclick="toggleDiv('feesChargesCheck','feesChargesDiv')"> Fees and Charges
                                            </label>
                                            <div id="feesChargesDiv" class="col-md-10" style="display: {{$course->feesChargesShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="feesChargesHeading"  value="{{$course->feesChargesHeading}}"
                                                       placeholder="Fees and Charges Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="feesCharges"
                                                          rows="4">{{$course->feesCharges}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><input id="downloadCheck" type="checkbox" class="icheck" {{$course->downloadShow == 'Y' ? 'checked' : ''}}
                                                                                         data-checkbox="icheckbox_flat-grey"
                                                                                         name="downloadShow"
                                                                                         value="Y" onclick="toggleDiv('downloadCheck','downloadDiv')"> Download </label>
                                            <div id="downloadDiv" class="col-md-10" style="display: {{$course->downloadShow == 'Y' ? 'block' : 'none'}}">
                                                <input type="text" class="form-control" name="downloadHeading"  value="{{$course->downloadHeading}}"
                                                       placeholder="Download Heading" autocomplete="off">
                                                <textarea class="ckeditor form-control" name="download"
                                                          rows="4">{{$course->download}}</textarea>
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
