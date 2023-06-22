<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSettings;
use Illuminate\Http\Request;

class CoursePageController extends Controller
{
    public function index()
    {
        $courseSettings = CourseSettings::first();
        $courseInfo = Course::orderBy('course_id','ASC')->get();
        return view('admin.coursePage.coursePage',['courseSettings'=>$courseSettings,"courseInfo" => $courseInfo]);
    }

    public function addCoursesProgram()
    {
        return view('admin.coursePage.addCourse');
    }

    public function editCoursesProgram($id)
    {
        $course = Course::find($id);
        return view('admin.coursePage.editCourse',['course'=>$course]);
    }

    public function storeCoursesProgram(Request $request)
    {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'assets/frontend/images/courses/';
        $image->move('public/'.$directory, $imageName);
        $imgUrl = $directory . $imageName;

        $course = new Course();
        $course->course_id = floor(time() - 999999999);
        $course->image = $imgUrl;
        $course->tittle = $request->tittle;
        $course->schedule = $request->schedule;
        $course->duration = $request->duration;
        $course->amount = $request->amount;
        $course->status = $request->status;
        $course->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $course->about = $request->about;
        $course->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $course->pedagogy = $request->pedagogy;
        $course->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $course->courseStructure = $request->courseStructure;
        $course->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $course->teachingMethods = $request->teachingMethods;
        $course->gradingPolicyShow = isset($request->gradingPolicyShow) ? $request->gradingPolicyShow : 'N';
        $course->gradingPolicy = $request->gradingPolicy;
        $course->feesChargesShow = isset($request->feesChargesShow) ? $request->feesChargesShow : 'N';
        $course->feesCharges = $request->feesCharges;
        $course->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $course->download = $request->download;
        if ($course->save()) {
            return redirect(url('/course-page'))->with('success', 'course info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Course info Save Failed');
    }
    public function updateCoursesProgram(Request $request)
    {
        $course = Course::find($request->course_id);
        if($course){
            $image = $request->file('image');
            if ($image){
                $imageName = $image->getClientOriginalName();
                $directory = 'assets/frontend/images/courses/';
                $image->move('public/'.$directory, $imageName);
                $imgUrl = $directory . $imageName;
            }else{
                $imgUrl = $course->image;
            }
        }
        $course->image = $imgUrl;
        $course->tittle = $request->tittle;
        $course->schedule = $request->schedule;
        $course->duration = $request->duration;
        $course->amount = $request->amount;
        $course->status = $request->status;
        $course->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $course->about = $request->about;
        $course->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $course->pedagogy = $request->pedagogy;
        $course->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $course->courseStructure = $request->courseStructure;
        $course->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $course->teachingMethods = $request->teachingMethods;
        $course->gradingPolicyShow = isset($request->gradingPolicyShow) ? $request->gradingPolicyShow : 'N';
        $course->gradingPolicy = $request->gradingPolicy;
        $course->feesChargesShow = isset($request->feesChargesShow) ? $request->feesChargesShow : 'N';
        $course->feesCharges = $request->feesCharges;
        $course->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $course->download = $request->download;
        if ($course->save()) {
            return redirect(url('/courses-page'))->with('success', 'Course info Update successfully');
        } else
            return redirect()->back()->with('failed', 'Course info Update Failed');
    }

    public function storeSetting(Request $request)
    {
        $image = $request->file('banner');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/coursePage/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->mastersSettingId)){
            $courseSettings = CourseSettings::find($request->mastersSettingId);
            if($image){
                if(file_exists($courseSettings->banner)){
                    unlink($courseSettings->banner);
                }
                $courseSettings->banner = $imgUrl;
            }
        }else{
            $courseSettings = new CourseSettings();
            $courseSettings->course_settings_id = floor(time() - 999999999);
            $courseSettings->banner = $imgUrl;
        }
        $courseSettings->tittle = $request->tittle;
        $courseSettings->short_description = $request->shortDescription;
        if ($courseSettings->save()) {
            return redirect()->route('coursesPage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }
}
