<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSettings;
use App\Models\FileDownload;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CoursePageController extends Controller
{
    public function index()
    {
        $courseSettings = CourseSettings::first();
        $courseInfo = Course::orderBy('course_id','ASC')->get();
        return view('admin.coursePage.coursePage',['courseSettings'=>$courseSettings,"courseInfo" => $courseInfo]);
    }

    public function downloadFileList()
    {
        $filesList = FileDownload::orderBy('created_at','ASC')->get();
        return view('admin.fileUpload.list',['filesList'=>$filesList]);
    }

    public function addCoursesProgram()
    {
        $pages = Pages::select('page_id','page_name','menu_tittle')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('page_type','courses')->where('pages.status','Y')->get();
        $courseTypes=config('dashboard_constant.COURSE_TYPE');
        return view('admin.coursePage.addCourse',['pages'=>$pages,'courseTypes'=>$courseTypes]);
    }

    public function editCoursesProgram($id)
    {
        $course = Course::find($id);
        $pages = Pages::select('page_id','page_name','menu_tittle')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('page_type','courses')->where('pages.status','Y')->get();
        $courseTypes=config('dashboard_constant.COURSE_TYPE');
        return view('admin.coursePage.editCourse',['course'=>$course, 'pages'=>$pages,'courseTypes'=>$courseTypes]);
    }

    public function editFileList($id)
    {
        if($id != 'new'){
            $fileInfo = FileDownload::find($id);
            $this->createDBAccessLog('File Upload View','FUV',$id,'File Upload View');
        }else{
            $fileInfo = null;
            $this->createDBAccessLog('File Upload View','SUV',$id,'File Upload View');
        }
        return view('admin.fileUpload.fileEdit')->with(compact('fileInfo'));
    }

    public function destroyDownloadFile($id)
    {
        // Find the item by ID
        $fileData = FileDownload::find($id);
        // Delete the item
        if ($fileData->delete()) {
            session()->flash('success', 'file data deleted successfully.');
            $this->createDBAccessLog('Delete file data','DFV',$id,'Delete file data');
        } else {
            session()->flash('error', 'File not found.');
        }
        return redirect()->route('fileList')->with('message', 'file data removed already ');
    }

    public function fileCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'upload_file' => 'required',
        ]);
        if (!isset($request->id) || empty($request->id)){
            $fileInfo = new FileDownload();
            $file_id = floor(time() - 999999999);
            $fileInfo->id = $file_id;
            $this->createDBAccessLog('New File Created','NFC',json_encode($fileInfo->getAttributes()),'New File Created');
        }else{
            $fileInfo = FileDownload::find($request->id);
            $this->createDBAccessLog('File Info Updated','FIU',json_encode($fileInfo->getAttributes()),'File Info Updated');
        }

//        @dump($validator);
//        die();
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $fileData = $request->file('upload_file');
        if ($fileData){
            if(file_exists($fileInfo->path)){
                unlink($fileInfo->path);
            }
            $fileName = $file_id.'_'.$fileData->getClientOriginalName();
//            @dump($fileName);
//            die();
            $directory = 'assets/frontend/images/fileDownload/';
            $fileData->move('public/'.$directory, $fileName);
            $downloadUrl = $directory . $fileName;
            $fileInfo->name = $request->name;
            $fileInfo->path = 'public/'.$downloadUrl;
        }
        if ($fileInfo->save()) {
            return redirect()->route('fileList')->with('message', 'File info Save successfully');
        } else
            return redirect()->back()->with('message', 'File info Save Failed');
    }

    public function storeCoursesProgram(Request $request)
    {
        $request->courseTypes = json_encode($request->courseTypes);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'assets/frontend/images/courses/';
        $image->move('public/'.$directory, $imageName);
        $imgUrl = $directory . $imageName;

        $course = new Course();
        $course->course_id = floor(time() - 999999999);
        $course->image = $imgUrl;
        $course->tittle = $request->tittle;
        $course->page_id = $request->page_id;
        $course->courseTypes = $request->courseTypes;
        $course->schedule = $request->schedule;
        $course->courseDate = $request->courseDate;
        $course->classes = $request->classes;
        $course->duration = $request->duration;
        $course->amount = $request->amount;
        $course->lastDate = $request->lastDate;
        $course->startDate = $request->startDate;
        $course->endDate = $request->endDate;
        $course->venue = $request->venue;
        $course->shortDescription = $request->shortDescription;
        $course->status = $request->status;
        $course->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $course->aboutHeading = $request->aboutHeading;
        $course->about = $request->about;
        $course->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $course->pedagogyHeading = $request->pedagogyHeading;
        $course->pedagogy = $request->pedagogy;
        $course->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $course->courseHeading = $request->courseHeading;
        $course->courseStructure = $request->courseStructure;
        $course->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $course->teachingHeading = $request->teachingHeading;
        $course->teachingMethods = $request->teachingMethods;
        $course->gradingPolicyShow = isset($request->gradingPolicyShow) ? $request->gradingPolicyShow : 'N';
        $course->gradingPolicyHeading = $request->gradingPolicyHeading;
        $course->gradingPolicy = $request->gradingPolicy;
        $course->feesChargesShow = isset($request->feesChargesShow) ? $request->feesChargesShow : 'N';
        $course->feesChargesHeading = $request->feesChargesHeading;
        $course->feesCharges = $request->feesCharges;
        $course->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $course->downloadHeading = $request->downloadHeading;
        $course->download = $request->download;
        if ($course->save()) {
            return redirect(url('/courses-page'))->with('message', 'course info Save successfully');
        } else
            return redirect()->back()->with('message', 'Course info Save Failed');
    }
    public function updateCoursesProgram(Request $request)
    {
        $request->courseTypes = json_encode($request->courseTypes);
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
//        dump($request->amountName);
//        dump($request->amount);
        // $amountArray = [];
        // foreach ($request->amount as $key => $value){
            // $amountArray[$value] = $request->amountName[$key];
        // }
//        dump($amountArray);
//        die();
        $course->image = $imgUrl;
        $course->tittle = $request->tittle;
        $course->page_id = $request->page_id;
        $course->courseTypes = $request->courseTypes;
        $course->schedule = $request->schedule;
        $course->courseDate = $request->courseDate;
        $course->classes = $request->classes;
        $course->duration = $request->duration;
        $course->amount = $request->amount;
        $course->lastDate = $request->lastDate;
        $course->startDate = $request->startDate;
        $course->endDate = $request->endDate;
        $course->venue = $request->venue;
        $course->shortDescription = $request->shortDescription;
        $course->status = $request->status;
        $course->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $course->aboutHeading = $request->aboutHeading;
        $course->about = $request->about;
        $course->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $course->pedagogyHeading = $request->pedagogyHeading;
        $course->pedagogy = $request->pedagogy;
        $course->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $course->courseHeading = $request->courseHeading;
        $course->courseStructure = $request->courseStructure;
        $course->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $course->teachingHeading = $request->teachingHeading;
        $course->teachingMethods = $request->teachingMethods;
        $course->gradingPolicyShow = isset($request->gradingPolicyShow) ? $request->gradingPolicyShow : 'N';
        $course->gradingPolicyHeading = $request->gradingPolicyHeading;
        $course->gradingPolicy = $request->gradingPolicy;
        $course->feesChargesShow = isset($request->feesChargesShow) ? $request->feesChargesShow : 'N';
        $course->feesChargesHeading = $request->feesChargesHeading;
        $course->feesCharges = $request->feesCharges;
        $course->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $course->downloadHeading = $request->downloadHeading;
        $course->download = $request->download;
        if ($course->save()) {
            return redirect(url('/courses-page'))->with('message', 'Course info Update successfully');
        } else
            return redirect()->back()->with('message', 'Course info Update Failed');
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
            return redirect()->route('coursesPage')->with('message', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('message', 'Settings info Save Failed');
    }
}
