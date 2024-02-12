@extends('frontend.master')
@section('stylesheet')

    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/recent_projects.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_archive.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/blog_single.css">
@endsection
@section('content')
    <section id="pageBannerPart">
        <div class="banner_images">
            @if(!empty($pageDetails->banner))
                <!-- <div class="row">
                        <div class="col-md-12"> -->
                <img src="{{ asset('/'.$pageDetails->banner) }}" alt="Technology" class="img-fluid w-100">
                <!-- </div>
            </div> -->
            @endif
        </div>
    </section>
    <section id="dev_apply" style="margin-top: 8%">
        <div class="container">
            @php
                function convertStringToArray($string) {
                    $result = [];
                    $parts = explode(',', $string);

                    foreach ($parts as $part) {
                        $values = explode('##', $part);
                        if (count($values) === 2) {
                            $result[] = [
                                "value" => $values[0],
                                "label" => ucfirst($values[1])
                            ];
                        }
                    }

                    return $result;
                }
            @endphp
            <div class="row">

                <!-- Form Apply -->
                <div class="col-lg-12">
                    <div class="recent-contact-part padding">
                        <h3>{{$pageDetails->heading}} Admission Form</h3>
                        <form method="POST" action="{{ route('storeFormData') }}" enctype="multipart/form-data" name="formData" class="padding">
                            @csrf
                            <input type="hidden" class="form-control" name="program_id" value="{{$program_id}}" placeholder="">
                            <input type="hidden" class="form-control" name="page_id" value="{{$pageDetails->page_id}}" placeholder="">
                            <input type="hidden" class="form-control" name="page_type" value="{{$pageDetails->page_type}}" placeholder="">
                            <div class="row">
                                @if($pageDetails->page_name != "Certification Program" && (is_array($formList) || is_object($formList)) )
                                    @php
                                        $name = '';
                                    @endphp
                                    @foreach($formList as $forms)
                                        @if($name != $forms->name)
                                            @php $name = $forms->name @endphp
                                            <div class="col-lg-12" style="margin: 20px;font-weight: bold;background-color: #0072bc;color: white;">{{$forms->name}}</div>
                                            <input type="hidden" class="form-control" name="form_group[]" value="{{$forms->group_id}}" placeholder="">
                                        @endif
                                        @if($forms->ftype == 'FR')
                                            <div class="{{$forms->fclass}}">
                                                <div class="from">
                                                    <label for="{{$forms->fid}}" class="form-label">{!! $forms->flabel !!} @if($forms->frequired == '1') <span class="required">*</span> @endif</label>
                                                    @php
                                                        $fRadios = convertStringToArray($forms->foption_value);
                                                    @endphp
                                                    @foreach($fRadios as $key=>$fRadio)

                                                        <input type="radio" id="radio{{$key}}" value="{{$fRadio['value']}}" name="{{$forms->fname}}" >
                                                        <label for="radio{{$key}}" class="form-label"></span>{{$fRadio['label']}}</label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @elseif($forms->ftype == 'FK')
                                            <div class="{{$forms->fclass}}">
                                                <div class="from">
                                                    <input type="{{$inputType[$forms->ftype]}}" class="" id="{{$forms->fid}}" name="{{$forms->fname}}" @if($forms->frequired == '1') required @endif autocomplete="off" />
                                                    <label for="{{$forms->fid}}" class="form-label">{!! $forms->flabel !!} @if($forms->frequired == '1') <span class="required">*</span> @endif</label>
                                                </div>
                                            </div>
                                        @elseif($forms->ftype == 'FS')
                                            <div class="{{$forms->fclass}}">
                                                <div class="from">
{{--                                                    <input type="{{$inputType[$forms->ftype]}}" class="" id="{{$forms->fid}}" name="{{$forms->fname}}" @if($forms->frequired == '1') required @endif autocomplete="off" />--}}
                                                    <label for="{{$forms->fid}}" class="form-label">{!! $forms->flabel !!} @if($forms->frequired == '1') <span class="required">*</span> @endif</label>
                                                    <select class="form-control" name="{{$forms->fname}}" id="{{$forms->fid}}" @if($forms->frequired == '1') required @endif autocomplete="off" >
                                                        @php
                                                            $foptions = convertStringToArray($forms->foption_value);
                                                        @endphp
                                                        @foreach($foptions as $fkey=>$fValue)
                                                            <option value="{{$fValue['value']}}">{{$fValue['label']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @else
                                            <div class="{{$forms->fclass}}">
                                                <div class="from">
                                                    <label for="{{$forms->fid}}" class="form-label">{!! $forms->flabel !!} @if($forms->frequired == '1') <span class="required">*</span> @endif</label>
                                                    <input type="{{$inputType[$forms->ftype]}}" class="form-control" id="{{$forms->fid}}" name="{{$forms->fname}}" @if($forms->frequired == '1') required @endif autocomplete="off" />
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach



                                    <div class="col-lg-6">
                                        <div class="custom-inputs submit">
                                            <button type="submit" class="btn">
                                                Submit Application
                                                <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g filter="url(#filter0_d)">
                                                        <circle cx="79" cy="79" r="29" fill="#4F81BD"></circle>
                                                    </g>
                                                    <path d="M85.7762 78.3732L80.7203 72.9666C80.576 72.8123 80.3837 72.7275 80.1785 72.7275C79.9732 72.7275 79.781 72.8124 79.6367 72.9666L79.1776 73.4576C79.0334 73.6117 78.954 73.8175 78.954 74.0369C78.954 74.2562 79.0334 74.469 79.1776 74.6231L82.1272 77.7841H72.7563C72.3338 77.7841 72 78.1378 72 78.5897V79.2838C72 79.7357 72.3338 80.1251 72.7563 80.1251H82.1606L79.1777 83.3037C79.0335 83.458 78.9541 83.6583 78.9541 83.8777C78.9541 84.0969 79.0335 84.3 79.1777 84.4542L79.6368 84.9437C79.7811 85.098 79.9733 85.1821 80.1787 85.1821C80.3838 85.1821 80.5761 85.0969 80.7204 84.9426L85.7763 79.5361C85.921 79.3813 86.0006 79.1746 86 78.9549C86.0005 78.7345 85.921 78.5277 85.7762 78.3732Z" fill="white"></path>
                                                    <defs>
                                                        <filter id="filter0_d" x="0" y="0" width="158" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                                            <feOffset></feOffset>
                                                            <feGaussianBlur stdDeviation="25"></feGaussianBlur>
                                                            <feColorMatrix type="matrix" values="0 0 0 0 0.956863 0 0 0 0 0.501961 0 0 0 0 0.223529 0 0 0 0.4 0"></feColorMatrix>
                                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                                        </filter>
                                                    </defs>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                @elseif($pageDetails->page_name == "Certification Program" && $formList !='')
                                    @php
                                        $name = '';
                                    @endphp
                                    @foreach($formList as $forms)
                                        @if($name != $forms->name)
                                            @php $name = $forms->name @endphp
                                            <input type="hidden" class="form-control" name="form_group[]" value="{{$forms->group_id}}" />
                                        @endif
                                    @endforeach
                                    <div class="row">
                                        <div class="col-lg-12" style="margin: 20px;font-weight: bold;background-color: #0072bc;color: white;">Course Information</div>
                                        <div class="col-lg-12">
                                            <div class="from">
                                                <label for="certification_name" class="form-label">Certification Name : <strong class="font-weight-bold text-dark">{!! $programName !!}</strong></label>
                                                <input type="hidden" class="form-control" name="program_name" value="{{$pageDetails->page_name}}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="from">
                                                <label for="fees_type" class="form-label">Fees Type <span class="required">*</span></label>
                                                <select class="form-control" name="fees_type" id="fees_type" required autocomplete="off" onchange="updatePrice()">
                                                    @foreach($foptions as $fkey=>$fValue)
                                                        <option value="{{$fValue['value']}}">{{$fValue['label']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="from">
                                                <label for="certification_amount" class="form-label">Amount <span class="required">*</span></label>
                                                <input type="text" class="form-control" id="certification_amount" name="certification_amount" required autocomplete="off" readonly="readonly" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <div class="custom-inputs submit text-right">
                                            <button type="submit" class="btn text-right">
                                                Submit Application
                                                <svg width="158" height="158" viewBox="0 0 158 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g filter="url(#filter0_d)">
                                                        <circle cx="79" cy="79" r="29" fill="#4F81BD"></circle>
                                                    </g>
                                                    <path d="M85.7762 78.3732L80.7203 72.9666C80.576 72.8123 80.3837 72.7275 80.1785 72.7275C79.9732 72.7275 79.781 72.8124 79.6367 72.9666L79.1776 73.4576C79.0334 73.6117 78.954 73.8175 78.954 74.0369C78.954 74.2562 79.0334 74.469 79.1776 74.6231L82.1272 77.7841H72.7563C72.3338 77.7841 72 78.1378 72 78.5897V79.2838C72 79.7357 72.3338 80.1251 72.7563 80.1251H82.1606L79.1777 83.3037C79.0335 83.458 78.9541 83.6583 78.9541 83.8777C78.9541 84.0969 79.0335 84.3 79.1777 84.4542L79.6368 84.9437C79.7811 85.098 79.9733 85.1821 80.1787 85.1821C80.3838 85.1821 80.5761 85.0969 80.7204 84.9426L85.7763 79.5361C85.921 79.3813 86.0006 79.1746 86 78.9549C86.0005 78.7345 85.921 78.5277 85.7762 78.3732Z" fill="white"></path>
                                                    <defs>
                                                        <filter id="filter0_d" x="0" y="0" width="158" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                                            <feOffset></feOffset>
                                                            <feGaussianBlur stdDeviation="25"></feGaussianBlur>
                                                            <feColorMatrix type="matrix" values="0 0 0 0 0.956863 0 0 0 0 0.501961 0 0 0 0 0.223529 0 0 0 0.4 0"></feColorMatrix>
                                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-12" style="margin: 20px;font-weight: bold;background-color: #0072bc;color: white;">No Form Found</div>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function updatePrice() {
            // Get the selected option text
            var selectedText = document.getElementById("fees_type").options[document.getElementById("fees_type").selectedIndex].text;

            // Extract the numeric part from the selected text using regular expression
            var numericValue = parseInt(selectedText.match(/\d+/)[0]);

            // Update the readonly text box with the extracted numeric value
            document.getElementById("certification_amount").value = numericValue;
        }
    </script>
    <!-- =========================== FOOTER PART  START =========================== -->
    @include('frontend.include.footer')
@endsection
