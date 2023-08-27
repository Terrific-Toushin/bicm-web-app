<?php

namespace App\Http\Controllers;

use App\Models\AboutSettings;
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
use App\Models\MastersProgram;
use App\Models\Menus;
use App\Models\Pages;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use App\Mail\CustomVerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
        }elseif($pageDetails->page_type == 'master'){
            $contentDetails = MastersProgram::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
            $viewPage = 'frontend.pages.programDetails';
        }elseif ($pageDetails->page_type == 'courses'){
            $contentDetails = Course::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
            $viewPage = 'frontend.pages.courseDetails';
        }elseif ($pageDetails->page_type == 'event'){
            $contentDetails = Events::where('page_id',$pageDetails->page_id)->where('status','Y')->get();
            $viewPage = 'frontend.pages.eventDetails';
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
			$pageDetails = Course::select('courses.*','pages.sidebar_status')->leftJoin('pages','pages.page_id','=','courses.page_id')->where('course_id',$page_id)->where('courses.status','Y')->first();
			if($pageDetails->sidebar_status == 'Y'){
				$sidebarDetails = AboutSettings::where('page_id',$pageDetails->page_id)->where('program_id',$page_id)->get();
			}else{
				$sidebarDetails = [];
			}
			$viewPage = 'frontend.pages.masterProgram';
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
        $pageDetails = Pages::select('banner','heading','form_group','page_id','page_type')->where('page_id',$page_id)->where('status','Y')->first();
        $formList = FormGroup::select('ev_form_groups.name','ev_form_group_fields.*')->leftJoin('ev_form_group_fields','ev_form_group_fields.group_id','=','ev_form_groups.id')->whereIn('ev_form_groups.id',json_decode($pageDetails->form_group))->orderBy('ev_form_groups.id','ASC')->orderBy('ev_form_group_fields.forder','ASC')->get();
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
        $user = User::find($id);

        if (!$user || !hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            return redirect('login')->with('error', 'Invalid verification link.');
        }

        return redirect('login')->with('success', 'Email verified successfully.');
    }

    public function storeFormData(Request $request)
    {

        $formData = $request->except('_token','program_id','page_id','page_type');
        if(!empty($request->email)){
            $studentInfo = StudentInfo::where('email',$request->email)->exists();
            if (!$studentInfo){
                $studentInfo = new StudentInfo();
                $student_id = floor(time() - 999999999);
                $studentInfo->id = $student_id;
                $studentInfo->email = $request->email;
                $studentInfo->first_name = $request->studentName;
                $randomPassword = Str::random(6);
                $studentInfo->password = Hash::make($randomPassword);
                $studentInfo->email_verified = "N";
                if ($studentInfo->save()){
                    try{
                        Mail::to($request->email)->send(new CustomVerificationEmail($request->studentName,$request->email, $randomPassword, route('verification.verify', ['id' => $student_id, 'hash' => sha1($request->email)])));
                    }
                    catch (Exception $exception){
                        var_dump("error found mail not send");
                        dd($exception);
                    }
                }
            }else{

            }


        }
        $aboutSettings = new FormData();
        $aboutSettings->form_id = floor(time() - 999999999);
        $aboutSettings->program_id = $request->program_id;
        $aboutSettings->page_id = $request->page_id;
        $aboutSettings->page_type = $request->page_type;
        $aboutSettings->form_data = json_encode($formData);
        if ($aboutSettings->save()) {
            return view('frontend.mastersProgram.payment');
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

        $studentInfo = new StudentInfo();
        $student_id = floor(time() - 999999999);
        $studentInfo->id = $student_id;
        $studentInfo->email = $request->email;
        $studentInfo->first_name = $request->first_name;
        $studentInfo->last_name = $request->last_name;
        $studentInfo->nid_birth = $request->nid_birth;
        $studentInfo->contact_number = $request->contact_number;
        $randomPassword = $request->password;
        $studentInfo->password = Hash::make($randomPassword);
        $studentInfo->email_verified = "N";
        if ($studentInfo->save()) {
            return redirect()->route('studentLogin')->with('success', 'Registration info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Registration info Save Failed');
    }

    public function checkStudentLogin(Request $request)
    {

        $password = $request->input('password');
        $studentInfo = StudentInfo::where('email',$request->email)->first();
        if ($studentInfo && password_verify($password, $studentInfo->password)) {
            // Authentication successful
            return view('frontend.student.studentDashboard'); // Replace 'dashboard' with your actual dashboard view
        } else {
            // Authentication failed
            return back()->with('error', 'Invalid email or password.');
        }
    }

    public function studentLogin(){
        return view('frontend.student.studentLoginForm');
    }

    public function studentSignUp(){
        return view('frontend.student.studentSignUpForm');
    }

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
