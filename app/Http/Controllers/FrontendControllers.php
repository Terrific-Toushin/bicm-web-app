<?php

namespace App\Http\Controllers;

use App\Models\AboutSettings;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Events;
use App\Models\FormData;
use App\Models\FormGroup;
use App\Models\FormGroupField;
use App\Models\HomeOverview;
use App\Models\HomeProject;
use App\Models\HomeService;
use App\Models\HomeSettings;
use App\Models\HomeWhy;
use App\Models\ListSettings;
use App\Models\MastersProgram;
use App\Models\Menus;
use App\Models\Pages;
use App\Models\PaymentDetails;
use App\Models\ResearchForm;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use App\Mail\CustomVerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Session;
use DB;

class FrontendControllers extends Controller
{
    public function index(){
        $header = HomeSettings::where('section_name','header')->where('status','Y')->first();
        $service = HomeSettings::where('section_name','service')->where('status','Y')->first();
        $overview = HomeSettings::where('section_name','overview')->where('status','Y')->first();
        $why = HomeSettings::where('section_name','why')->where('status','Y')->first();
        $project = HomeSettings::where('section_name','project')->where('status','Y')->first();
        $homeService = HomeService::orderBy('home_service_id','ASC')->get();
        $homeOverview = HomeOverview::orderBy('home_overview_id','ASC')->get();
        $homeWhy = HomeWhy::orderBy('home_why_id','ASC')->get();
        $homeProject = HomeProject::orderBy('home_project_id','ASC')->get();
        return view('frontend.home.home',[
            'header' => $header,
            'service' => $service,
            'overview' => $overview,
            'why' => $why,
            'project' => $project,
            'homeService' => $homeService,
            'homeOverview' => $homeOverview,
            'homeWhy' => $homeWhy,
            'homeProject' => $homeProject
        ]);
    }

    public function service(){
        return view('frontend.service.service');
    }

    public function pageDetails($url){
        $pageDetails = Pages::select('pages.*')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('menus.url',$url)->where('pages.status','Y')->first();
        if(empty($pageDetails)){
            return view('frontend.notFound');
        }elseif ($url == 'contact-us'){
            $viewPage = 'frontend.pages.contactUs';
            return view($viewPage,[
                'pageDetails' => $pageDetails
            ]);
        }elseif ($url == 'research-form'){
            $viewPage = 'frontend.pages.researchForm';
            return view($viewPage,[
                'pageDetails' => $pageDetails
            ]);
        }elseif ($url == 'diploma'){
            $coursePageDetails = Course::select('courses.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','courses.page_id')->where('courses.page_id',$pageDetails->page_id)->where('courses.status','Y')->first();
            if(isset($coursePageDetails->sidebar_status) && $coursePageDetails->sidebar_status == 'Y'){
                $sidebarDetails = AboutSettings::where('page_id',$coursePageDetails->page_id)->where('program_id',$coursePageDetails->course_id)->get();
            }else{
                $sidebarDetails = [];
            }
            $viewPage = 'frontend.pages.diplomaProgram';
            return view($viewPage,[
                'pageDetails' => $coursePageDetails,
                'sidebarDetails' => $sidebarDetails
            ]);
        }elseif($pageDetails->page_type == 'master'){
//            $contentDetails = MastersProgram::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
//            $viewPage = 'frontend.pages.programDetails';

            $masterPageDetails = MastersProgram::select('masters_program.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','masters_program.page_id')->where('masters_program.status','Y')->first();
            if($masterPageDetails->sidebar_status == 'Y'){
                $sidebarDetails = AboutSettings::where('page_id',$masterPageDetails->page_id)->where('program_id',$masterPageDetails->masters_program_id)->get();
            }else{
                $sidebarDetails = [];
            }
            $viewPage = 'frontend.pages.masterProgram';
            return view($viewPage,[
                'pageDetails' => $masterPageDetails,
                'sidebarDetails' => $sidebarDetails
            ]);
        }elseif ($pageDetails->page_type == 'courses'){
            $contentDetails = Course::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
            $currentTime = now();
            foreach ($contentDetails as &$content){
                if ($currentTime < $content->startDate) {
                    // The event is in the future (upcoming)
                    $content->courseTypes = 'upcoming';
                } elseif ($currentTime >= $content->startDate && $currentTime <= $content->endDate) {
                    // The event is currently running
                    $content->courseTypes = 'running';
                } else {
                    // The event is in the past
                    $content->courseTypes = 'past';
                }
            }
            $viewPage = 'frontend.pages.courseDetails';
        }elseif ($pageDetails->page_type == 'event'){
            $contentDetails = Events::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
            $groupContent = [];
            $groupYear = [];
            foreach ($contentDetails as $contentDetail){
                $groupContent[$contentDetail->year][] = $contentDetail;
                $groupYear[$contentDetail->year]=$contentDetail->year;
            }
            $viewPage = 'frontend.pages.eventDetails';
            return view($viewPage,[
                'pageDetails' => $pageDetails,
                'contentDetails' => $contentDetails,
                'groupContent' => $groupContent,
                'groupYear' => $groupYear,
            ]);
        }elseif ($pageDetails->page_type == 'list'){
            $contentDetails = ListSettings::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
            $viewPage = 'frontend.pages.listDetails';
        }else{
            if($pageDetails->form_status == 'Y'){
                $formList = FormGroup::select('ev_form_groups.name','ev_form_group_fields.*')->leftJoin('ev_form_group_fields','ev_form_group_fields.group_id','=','ev_form_groups.id')->whereIn('ev_form_groups.id',json_decode($pageDetails->form_group))->orderBy('ev_form_groups.id','ASC')->orderBy('ev_form_group_fields.forder','ASC')->get();
                $inputType = config("dashboard_constant.FIELD_TYPE");
                $contentDetails = [
                    'formList' => $formList,
                    'inputType' => $inputType
                ];
            }else{
                $contentDetails = [];
            }

            $viewPage = 'frontend.pages.pageDetails';
        }

        return view($viewPage,[
            'pageDetails' => $pageDetails,
            'contentDetails' => $contentDetails,
        ]);
    }

    public function programDetails($page_type,$page_id){
        if($page_type == 'master'){
            $pageDetails = MastersProgram::select('masters_program.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','masters_program.page_id')->where('masters_program_id',$page_id)->where('masters_program.status','Y')->first();
            if($pageDetails->sidebar_status == 'Y'){
                $sidebarDetails = AboutSettings::where('page_id',$pageDetails->page_id)->where('program_id',$page_id)->get();
            }else{
                $sidebarDetails = [];
            }
            $viewPage = 'frontend.pages.masterProgram';
        }elseif ($page_type == 'courses'){
            $pageDetails = Course::select('courses.*','pages.sidebar_status','pages.banner')->leftJoin('pages','pages.page_id','=','courses.page_id')->where('course_id',$page_id)->where('courses.status','Y')->first();
            if($pageDetails->sidebar_status == 'Y'){
                $sidebarDetails = AboutSettings::where('page_id',$pageDetails->page_id)->where('program_id',$page_id)->get();
            }else{
                $sidebarDetails = [];
            }
            $viewPage = 'frontend.pages.courseDetailsNew';
        }elseif ($page_type == 'event'){
            $pageDetails = Events::select('events.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','events.page_id')->where('events_id',$page_id)->where('events.status','Y')->first();
            if($pageDetails->sidebar_status == 'Y'){
                $sidebarDetails = AboutSettings::where('page_id',$pageDetails->page_id)->where('program_id',$page_id)->get();
            }else{
                $sidebarDetails = [];
            }
            $viewPage = 'frontend.pages.eventProgram';
        }
        return view($viewPage,[
            'pageDetails' => $pageDetails,
            'sidebarDetails' => $sidebarDetails
        ]);
    }

    public function courseDetails($page_id){
        $pageDetails = Course::select('courses.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','courses.page_id')->where('course_id',$page_id)->where('courses.status','Y')->first();
        if($pageDetails->sidebar_status == 'Y'){
            $sidebarDetails = AboutSettings::where('page_id',$pageDetails->page_id)->where('program_id',$page_id)->get();
        }else{
            $sidebarDetails = [];
        }
        return view('frontend.pages.courseProgram',[
            'pageDetails' => $pageDetails,
            'sidebarDetails' => $sidebarDetails
        ]);
    }

    public function eventDetails($page_id){
        $pageDetails = Events::select('events.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','events.page_id')->where('events_id',$page_id)->where('events.status','Y')->first();
        if($pageDetails->sidebar_status == 'Y'){
            $sidebarDetails = AboutSettings::where('page_id',$pageDetails->page_id)->where('program_id',$page_id)->get();
        }else{
            $sidebarDetails = [];
        }
        return view('frontend.pages.eventProgram',[
            'pageDetails' => $pageDetails,
            'sidebarDetails' => $sidebarDetails
        ]);
    }

    public function programForm($page_id,$program_id){
        $pageDetails = Pages::where('page_id',$page_id)->where('status','Y')->first();
//        $pageDetails = Pages::select('banner','heading','form_group','page_id','page_type')->where('page_id',$page_id)->where('status','Y')->first();

//        if($pageDetails->page_name == 'Certification Program'){
//            dump($pageDetails);
//        }
        if($pageDetails && !empty($pageDetails->form_group) && $pageDetails->form_group != "null"){
            $formList = FormGroup::select('ev_form_groups.name','ev_form_group_fields.*')->leftJoin('ev_form_group_fields','ev_form_group_fields.group_id','=','ev_form_groups.id')->whereIn('ev_form_groups.id',json_decode($pageDetails->form_group))->orderBy('ev_form_groups.id','ASC')->orderBy('ev_form_group_fields.forder','ASC')->get();
        }else{
            $formList = '';
        }

        if($pageDetails->page_name == 'Certification Program' && $formList!=''){
            if (Session::has('student_id')){
                $foptions = $this->convertStringToArray($formList[0]->foption_value);
                $programName = Course::select('tittle')->find($program_id);
                return view('frontend.pages.masterProgramForm',[
                    'pageDetails' => $pageDetails,
                    'formList' => $formList,
                    'foptions' => $foptions,
                    'program_id' => $program_id,
                    'programName' => $programName->tittle
                ]);
            }else{
                Session::put('student_redirect_pageID', $page_id);
                Session::put('student_redirect_programID', $program_id);
                return redirect()->route('studentLogin')->with('error', 'You have to login first for this course');
            }

        }
        $inputType = config("dashboard_constant.FIELD_TYPE");
        return view('frontend.pages.masterProgramForm',[
            'pageDetails' => $pageDetails,
            'formList' => $formList,
            'inputType' => $inputType,
            'program_id' => $program_id
        ]);

    }
    public function verify($id, $hash)
    {
        $student = StudentInfo::find($id);

        if (!$student || !hash_equals((string) $hash, sha1($student->email))) {
            return redirect('login')->with('error', 'Invalid verification link.');
        }

        return redirect('login')->with('success', 'Email verified successfully.');
    }

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

    public function storeFormData(Request $request)
    {

        $formData = $request->except('_token','program_id','page_id','page_type','form_group');
        $request->form_group = json_encode($request->form_group);
        if(!empty($request->email)){
            $studentInfo = StudentInfo::where('email',$request->email)->exists();
            if (!$studentInfo){
                $currentYear = date('y');
                $currentMonth = date('m');
                $maxId = DB::table('student_info')->max('id_number') ?? "{$currentYear}{$currentMonth}000000";
                $studentInfo = new StudentInfo();
                $student_id = floor(time() - 999999999);
                $studentInfo->id = $student_id;
                $studentInfo->id_number = (int)$maxId + 1;
                $studentInfo->email = $request->email;
                $studentInfo->first_name = $request->studentName;
                $randomPassword = Str::random(6);
                $studentInfo->password = Hash::make($randomPassword);
                $studentInfo->email_verified = "N";
                $studentInfo->status = "Y";
                $studentInfo->profile_pic = "";
//                if ($studentInfo->save()){
//                    try{
//                        Mail::to($request->email)->send(new CustomVerificationEmail($request->studentName,$request->email, $randomPassword, route('verification.verify', ['id' => $student_id, 'hash' => sha1($request->email)])));
//                    }
//                    catch (Exception $exception){
//                        return redirect()->back()->with('failed', 'Form info Save Failed Can not send Email' );
//                    }
//                }
            }else{
                $studentInfo = StudentInfo::where('email',$request->email)->first();
                $student_id = $studentInfo->id;
            }


        }elseif (Session::has('student_id') && isset($request->program_name) && $request->program_name == "Certification Program"){
            $student_id = Session::get('student_id');
            $studentInfo = StudentInfo::find($student_id);
//            dump($studentInfo);
//            dump($request);
//            die();

        }
        $formGroupData = new FormData();
        $form_id = floor(time() - 999999999);
        $formGroupData->form_id = $form_id;
        $formGroupData->program_id = $request->program_id;
        $formGroupData->student_id = $student_id;
        $formGroupData->page_id = $request->page_id;
        $formGroupData->page_type = $request->page_type;
        $formGroupData->form_group = isset($request->form_group) ? $request->form_group : '';
        $formGroupData->form_data = json_encode($formData);
        if ($formGroupData->save()) {
            $paymentDetails = new PaymentDetails();
            $paymentDetails->payment_id = floor(time() - 999999999);
            $paymentDetails->student_id = $student_id;
            $paymentDetails->form_id = $form_id;
            $pageDetails = Pages::find($request->page_id);
            $paymentDetails->course_type = $pageDetails->page_type;
            $paymentDetails->course_id = $request->program_id;
            if($pageDetails->page_type == 'master'){
                $courseDetails = MastersProgram::select('amount','tittle')->where('masters_program_id',$request->program_id)->where('status','Y')->first();
                $paymentDetails->amount = $courseDetails->amount;
                $paymentDetails->course_name = $courseDetails->tittle;
            }elseif ($request->program_name == "Certification Program"){
                $courseDetails = Course::select('amount','tittle')->where('course_id',$request->program_id)->where('status','Y')->first();
                $paymentDetails->amount = $request->certification_amount;
                $paymentDetails->course_name = $courseDetails->tittle;
            }elseif ($pageDetails->page_type == 'courses'){
                $courseDetails = Course::select('amount','tittle')->where('course_id',$request->program_id)->where('status','Y')->first();
                $paymentDetails->amount = $courseDetails->amount;
                $paymentDetails->course_name = $courseDetails->tittle;
            }else{
                $paymentDetails->amount = 0;
                $paymentDetails->course_name = 'Not Found';
            }
            $paymentDetails->custom_amount = '';
            $paymentDetails->Remarks = $request->program_name == "Certification Program" ? $request->fees_type : '';
            $paymentDetails->pay_txid = '';
            $paymentDetails->paid_status = 'd';
            if ($paymentDetails->save()){
                return redirect()->route('studentLogin')->with('success', 'Registration info Save successfully');
            }else{
                return redirect()->back()->with('failed', 'Form info Save Failed');
            }

        } else
            return redirect()->back()->with('failed', 'Form info Save Failed');
    }

    public function storeContactData(Request $request)
    {
        $formData = $request->except('_token');
        $aboutSettings = new FormData();
        $aboutSettings->form_id = floor(time() - 999999999);
        $aboutSettings->program_id = $request->program_id;
        $aboutSettings->page_id = $request->page_id;
        $aboutSettings->page_type = $request->page_type;
        $aboutSettings->form_data = json_encode($formData);
        if ($aboutSettings->save()) {
            return redirect()->route('home')->with('success', 'info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Form info Save Failed');
    }

    public function studentNew(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'contact_number' => 'required|string|max:11',
            'email' => 'required|string|email|unique:student_info|confirmed',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('student-signUp')
                ->withErrors($validator)
                ->withInput();
        }
        $currentYear = date('y');
        $currentMonth = date('m');
        $maxId = DB::table('student_info')->max('id_number') ?? "{$currentYear}{$currentMonth}000000";
        $studentInfo = new StudentInfo();
        $student_id = floor(time() - 999999999);
        $studentInfo->id = $student_id;
        $studentInfo->id_number = (int)$maxId + 1;
        $studentInfo->email = $request->email;
        $studentInfo->first_name = $request->first_name;
        $studentInfo->last_name = $request->last_name;
        $studentInfo->nid_birth = $request->nid_birth;
        $studentInfo->contact_number = $request->contact_number;
        $randomPassword = $request->password;
        $studentInfo->password = Hash::make($randomPassword);
        $studentInfo->email_verified = "N";
        $studentInfo->status = "Y";
        $studentInfo->profile_pic = "";
        if ($studentInfo->save()) {
            return redirect()->route('studentLogin')->with('success', 'Registration info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Registration info Save Failed');
    }

    public function studentUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'contact_number' => 'required|string|max:11',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $image = $request->file('profile_pic');
        $studentInfo = StudentInfo::find($request->id);
        if ($image){
            if(file_exists($studentInfo->profile_pic)){
                unlink($studentInfo->profile_pic);
            }
            $imageName = $request->id.'_'.$image->getClientOriginalName();
            $directory = 'assets/frontend/images/student/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
            $studentInfo->profile_pic = $imgUrl;
        }
        $studentInfo->first_name = $request->first_name;
        $studentInfo->last_name = $request->last_name;
        $studentInfo->nid_birth = $request->nid_birth;
        $studentInfo->contact_number = $request->contact_number;
        if ($studentInfo->save()) {
            return redirect()->route('studentDashboard')->with('success', 'Student info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Registration info Save Failed');
    }

    public function checkStudentLogin(Request $request)
    {
        $password = $request->input('password');
        $studentInfo = StudentInfo::where('email',$request->email)->first();
        if ($studentInfo && password_verify($password, $studentInfo->password)) {
            // Authentication successful
            // Set a session variable to indicate that the customer is logged in
            Session::put('student_id', $studentInfo->id);
            if (Session::has('student_redirect_pageID') && Session::has('student_redirect_programID')){
                $page_id = Session::get('student_redirect_pageID');
                $program_id = Session::get('student_redirect_programID');
                Session::forget('student_redirect_pageID');
                Session::forget('student_redirect_programID');
//                dump($page_id);
//                dump($program_id);
                return redirect()->route('programForm',['page_id'=>$page_id,'program_id'=>$program_id])->with('success', 'Login Successfully');
            }else{
                return redirect()->route('studentDashboard')->with('success', 'Welcome to dashboard');
            }
        } else {
            // Authentication failed
            return back()->with('error', 'Invalid email or password.');
        }
    }

    public function studentLogin(){
        if (Session::has('student_id')){
            return redirect()->route('studentDashboard');
        }else{
            return view('frontend.student.studentLoginForm');
        }

    }

    public function studentSignUp(){
        if (Session::has('student_id')){
            return redirect()->route('studentDashboard');
        }else{
            return view('frontend.student.studentSignUpForm');
        }

    }

    public function studentLogout(){
        if (Session::has('student_id')){
            Session::forget('student_id');
        }
        return redirect()->route('studentLogin');
    }

    public function studentDashBoard(){
        if (Session::has('student_id')){
            $studentId = Session::get('student_id');
            $studentInfo = StudentInfo::find($studentId);
            $studentSummery = PaymentDetails::where('student_id', $studentId)
                ->selectRaw('COUNT(form_id) as course_count')
                ->selectRaw('SUM(CASE WHEN paid_status = "d" THEN amount ELSE 0 END) as total_amount_due')
                ->selectRaw('SUM(CASE WHEN paid_status = "p" THEN amount ELSE 0 END) as total_amount_paid')
                ->first();
            $studentCourses = FormData::select('form_data.*','pages.page_name','pages.page_type','payment_details.paid_status','payment_details.payment_id','payment_details.amount as payment_details_amount')
                ->leftJoin('pages','form_data.page_id','=','pages.page_id')->leftJoin('payment_details','form_data.form_id','=','payment_details.form_id')
                ->where('form_data.student_id', $studentId)->get();
            $studentPrograms = [];
            if($studentCourses){
                foreach ($studentCourses as $studentCours){
                    if ($studentCours->page_type == 'master'){
                        $studentPrograms[$studentCours->program_id] = MastersProgram::select('tittle','amount')->where('masters_program_id',$studentCours->program_id)->first();
                    }elseif ($studentCours->page_type == 'courses'){
                        $studentPrograms[$studentCours->program_id] = Course::select('tittle','amount')->where('course_id',$studentCours->program_id)->first();
                    }
                }
            }
            $paymentStatus = config("dashboard_constant.PAYMENT_STATUS");
            return view('frontend.student.studentDashboard')->with(compact('studentInfo','studentSummery','studentCourses','paymentStatus','studentPrograms'));
        }else{
            return redirect()->route('studentLogin');
        }

    }

    public function studentPayNow(Request $request){
        $paymentDetails = PaymentDetails::where('payment_id', $request->payment_id)
            ->leftJoin('student_info','payment_details.student_id','=','student_info.id')
            ->first();
        return view('frontend.mastersProgram.payment')->with(compact('paymentDetails'));
    }

    public function storeContact(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:80',
            'email' => 'required|string|email',
            'number' => 'required|string|max:11',
            'subject' => 'required|string|max:120',
            'message' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $contact = new Contact();
        $contact->contact_id = floor(time() - 999999999);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->ip_address = \Request::ip();
        $contact->status = "U";
        if ($contact->save()) {
            return redirect()->route('home')->with('message', 'info Save successfully');
        } else
            return redirect()->back()->with('error', 'Contact info Save Failed');
    }
    private function storeFile($reasearch_id,$files){
        $imageName = $reasearch_id.'_'.$files->getClientOriginalName();
        $directory = 'assets/frontend/images/researchFile/';
        $files->move('public/'.$directory, $imageName);
        $imgUrl = $directory . $imageName;
        return $imgUrl;
    }

    public function researchFrom(Request $request){
        $validator = Validator::make($request->all(), [
            'researchers_name' => 'required|string|max:80',
            'researchers_email' => 'required|string|email',
            'researchers_number' => 'required|string|max:11',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $reasearch_id = floor(time() - 999999999);
        $research_proposal_file = $request->file('research_proposal_file');
        if ($research_proposal_file){
            $research_proposal_file_name = $this->storeFile($reasearch_id,$research_proposal_file);
            $request->request->add(['research_proposal_file_name' => $research_proposal_file_name]);
        }
        $agreement_paper_file = $request->file('agreement_paper_file');
        if ($agreement_paper_file){
            $agreement_paper_file_name = $this->storeFile($reasearch_id,$agreement_paper_file);
            $request->request->add(['agreement_paper_file_name' => $agreement_paper_file_name]);
        }
        $research_proposal01_file = $request->file('research_proposal01_file');
        if ($research_proposal01_file){
            $research_proposal01_file_name = $this->storeFile($reasearch_id,$research_proposal01_file);
            $request->request->add(['research_proposal01_file_name' => $research_proposal01_file_name]);
        }
        $experience_file = $request->file('experience_file');
        if ($experience_file){
            $experience_file_name = $this->storeFile($reasearch_id,$experience_file);
            $request->request->add(['experience_file_name' => $experience_file_name]);
        }

        $formData = $request->except('_token','research_proposal_file','agreement_paper_file','research_proposal01_file','experience_file');
//        dump($formData);
//        die();
        $researchForm = new ResearchForm();
        $researchForm->reasearch_id = floor(time() - 999999999);
        $researchForm->researchers_name = $request->researchers_name;
        $researchForm->researchers_email = $request->researchers_email;
        $researchForm->researchers_number = $request->researchers_number;
        $researchForm->form_data = json_encode($formData);
        if ($researchForm->save()) {
            return redirect()->route('home')->with('success', 'info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Form info Save Failed');
    }

    public function uploadChunk(Request $request)
    {
        // Validate the request
        $request->validate([
            'chunk' => 'required|file',
            'fileName' => 'required|string',
            'email' => 'required|email',
            'offset' => 'required|numeric',
        ]);

        // Handle chunked file upload
        $chunk = $request->file('chunk');
        $fileName = $request->input('fileName');
        $email = $request->input('email');
        $offset = $request->input('offset');

        // Save the chunk
        $chunkName = $fileName . '_part_' . $offset . '.part';
        $chunkPath = $chunk->storeAs('chunks/' . $email, $chunkName);

        return response()->json(['success' => true, 'chunk_path' => $chunkPath]);
    }

    public function assembleChunks($fileName, $email, $chunkDirectory, $chunkCount)
    {
        $assembledFilePath = $chunkDirectory . '/../' . $fileName;

        for ($i = 0; $i < $chunkCount; $i++) {
            $chunkFilePath = $chunkDirectory . '/' . $fileName . '_part_' . $i . '.part';
            $chunkContent = file_get_contents($chunkFilePath, FILE_APPEND);
            file_put_contents($assembledFilePath, $chunkContent);
            // Delete the chunk file
            Storage::delete($chunkFilePath);
        }

        // Remove the chunk directory
        Storage::deleteDirectory('chunks/' . $email);

        return $assembledFilePath;
    }

    public function isLastChunk(Request $request)
    {
        // Validate the request
        $request->validate([
            'fileName' => 'required|string',
            'email' => 'required|email',
        ]);

        // Handle the last chunk
        $fileName = $request->input('fileName');
        $email = $request->input('email');
        $chunkDirectory = storage_path('app/chunks/' . $email);
        $chunkCount = count(Storage::files('chunks/' . $email));

        if ($chunkCount == config('fileupload.chunk_count')) {
            // Assemble chunks
            $filePath = $this->assembleChunks($fileName, $email, $chunkDirectory, $chunkCount);
            return response()->json(['success' => true, 'file_path' => $filePath]);
        }

        return response()->json(['success' => false]);
    }

    /*public function uploadChunk(Request $request)
    {
        $chunk = $request->input('chunk');
        $fileName = $request->input('fileName');
        $email = $request->input('email');
        $offset = $request->input('offset');
        $chunkCount = $request->input('chunkCount');

        // Specify the storage directory where you want to save the file chunks
        $chunkDirectory = storage_path('app/chunks/' . $email . '_' . $fileName);

        // Create the directory if it doesn't exist
        if (!file_exists($chunkDirectory)) {
            mkdir($chunkDirectory, 0777, true);
        }

        // Save the chunk to a file
        $chunkFilePath = $chunkDirectory . '/' . $fileName . '_part_' . $offset . '.part';
        file_put_contents($chunkFilePath, base64_decode($chunk));

        // Check if it's the last chunk and assemble the file
        /*if ($this->isLastChunk($chunkCount, $offset)) {
            $assembledFilePath = $this->assembleChunks($fileName, $email, $chunkDirectory, $chunkCount);

            // Specify the storage directory where you want to save the assembled files
            $finalDirectory = storage_path('app/uploads/' . $email);
            if (!file_exists($finalDirectory)) {
                mkdir($finalDirectory, 0777, true);
            }

            // Move the assembled file to the final directory
            $finalFilePath = $finalDirectory . '/' . $fileName;
            rename($assembledFilePath, $finalFilePath);

            // Return the file path
            return response()->json(['success' => true, 'filePath' => '/storage/uploads/' . $email . '/' . $fileName]);
        }========add *====/

        return response()->json(['success' => true]);
    }*/



    public function mastersProgram(){
        return view('frontend.mastersProgram.mastersProgram');
    }

    public function certificationTraining(){
        return view('frontend.certificationTraining.certificationTraining');
    }

    public function approch(){
        return view('frontend.approch.approch');
    }

    public function diploma(){
        return view('frontend.diploma.diploma');
    }
}
