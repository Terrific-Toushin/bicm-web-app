<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class StudentController extends Controller
{
    public function index()
    {
        $allStudent = StudentInfo::select('id','id_number','email','first_name','last_name','nid_birth','contact_number','profile_pic','status')->orderBy('id_number','DESC')->get();
        $page_type = ['master','courses'];
        $studentCourses =
        $studentData = [];
        foreach ($allStudent as $student){
            $results = FormData::select('pages.page_name', DB::raw('count(*) as total'))
                ->leftJoin('pages','form_data.page_id','=','pages.page_id')->where('form_data.student_id',$student->id)
                ->whereIn('pages.page_type', $page_type)->groupBy('pages.page_name')->get();
            if($results){
                foreach ($results as $result){
                    if(!empty($studentData[$student->id])){
                        $studentData[$student->id] .= '<br>'.$result->page_name. ' = '.$result->total;
                    }else{
                        $studentData[$student->id] = $result->page_name. ' = '.$result->total;
                    }
                }
            }else{
                $studentData[$student->id] = 'no course found';
            }

        }
//        echo json_encode($studentData);
//        die();

        return view('admin.student.list')->with(compact('allStudent','studentData'));
    }

    public function newStudent($id)
    {
        if($id != 'new'){
            $studentInfo = StudentInfo::select('id','id_number','email','first_name','last_name','nid_birth','contact_number','profile_pic','status')->find($id);
            $this->createDBAccessLog('Student Update View','SUV',$id,'Student Update View');
        }else{
            $studentInfo = null;
            $this->createDBAccessLog('New Student View','SUV',$id,'New Student View');
        }
        return view('admin.student.studentEdit')->with(compact('studentInfo'));
    }

    public function destroy($id)
    {
        // Find the item by ID
        $student = StudentInfo::find($id);
        // Delete the item
        if ($student->delete()) {
            session()->flash('success', 'Student deleted successfully.');
            $this->createDBAccessLog('Delete Student','DSV',$id,'Delete Student');
        } else {
            session()->flash('error', 'Page not found.');
        }
        return redirect()->route('studentList')->with('message', 'Student removed already ');
    }

    public function changeStudentPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $studentInfo = StudentInfo::find($request->id);
        $studentInfo->password = Hash::make($request->password);
        if ($studentInfo->save()) {
            $this->createDBAccessLog('Change Student Password','CSP',json_encode($studentInfo->getAttributes()),'Change Student Password');
            return redirect()->route('studentList')->with('message', 'Student password change successfully');
        } else
            return redirect()->back()->with('message', 'Student info Save Failed');
    }

    public function studentNew(Request $request)
    {
        if (!isset($request->id) || empty($request->id)){
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'contact_number' => 'required|string|max:11',
                'email' => 'required|string|email|unique:student_info',
                'password' => 'required|string|min:6|confirmed',
            ]);
            $studentInfo = new StudentInfo();
            $currentYear = date('y');
            $currentMonth = date('m');
            $maxId = DB::table('student_info')->max('id_number') ?? "{$currentYear}{$currentMonth}000000";
            $student_id = floor(time() - 999999999);
            $studentInfo->id = $student_id;
            $studentInfo->id_number = (int)$maxId + 1;
            $randomPassword = $request->password;
            $studentInfo->password = Hash::make($randomPassword);
            $studentInfo->email_verified = "N";
            $studentInfo->profile_pic = "";
            $this->createDBAccessLog('New Student Created','NSC',json_encode($studentInfo->getAttributes()),'New Student Created');
        }else{
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:100',
                'last_name' => 'required|string|max:100',
                'contact_number' => 'required|string|max:11',
                'email' => 'required|string|email',
            ]);
            $studentInfo = StudentInfo::find($request->id);
            $this->createDBAccessLog('Student Info Updated','SIU',json_encode($studentInfo->getAttributes()),'Student Info Updated');
        }


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('profile_pic');
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

        $studentInfo->email = $request->email;
        $studentInfo->first_name = $request->first_name;
        $studentInfo->last_name = $request->last_name;
        $studentInfo->nid_birth = $request->nid_birth;
        $studentInfo->contact_number = $request->contact_number;
        $studentInfo->status = $request->status;
        if ($studentInfo->save()) {
            return redirect()->route('studentList')->with('message', 'Student info Save successfully');
        } else
            return redirect()->back()->with('message', 'Student info Save Failed');
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
        $studentInfo->status = $request->status;
        if ($studentInfo->save()) {
            $this->createDBAccessLog('Student Info Updated','SIU',json_encode($studentInfo->getAttributes()),'Student Info Updated');
            return redirect()->route('studentDashboard')->with('message', 'Student info Save successfully');
        } else
            return redirect()->back()->with('message', 'Registration info Save Failed');
    }
}
