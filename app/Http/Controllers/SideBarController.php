<?php

namespace App\Http\Controllers;

use App\Models\AboutSettings;
use App\Models\Course;
use App\Models\Events;
use App\Models\MastersProgram;
use App\Models\Pages;
use Illuminate\Http\Request;

class SideBarController extends Controller
{
    public function index()
    {
        $aboutSettings = AboutSettings::orderBy('about_settings_id','ASC')->get();
        return view('admin.sideBar.sideBar',[
            'aboutSettings'=>$aboutSettings
        ]);
    }
    public function newSideBar($id)
    {
        if($id != 'new'){
            $aboutSettings = AboutSettings::find($id);
        }else{
            $aboutSettings = null;
        }
        $pages = Pages::select('page_id','page_name','menu_tittle','page_type')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('sidebar_status','Y')->where('pages.status','Y')->get();
//        dump($pages);
//        die();
        return view('admin.sideBar.sideBarEdit',['aboutSettings' => $aboutSettings, "pages" => $pages]);
    }

    public function programMenu(Request $request)
    {
//        $pageType = Pages::selectRaw('page_type')->where('page_id',$request->page_id)->first();
        if($request->page_type == 'master'){
            $programMenus = MastersProgram::selectRaw('masters_program_id as program_id, tittle')->where('page_id',$request->page_id)->where('status','Y')->get();
        }elseif ($request->page_type == 'courses'){
            $programMenus = Course::selectRaw('course_id as program_id,tittle')->where('page_id',$request->page_id)->where('status','Y')->get();
        }elseif ($request->page_type == 'event'){
            $programMenus = Events::selectRaw('events_id as program_id,tittle')->where('page_id',$request->page_id)->where('status','Y')->get();
        }else{
            $programMenus = '';
        }
//        dd(DB::getQueryLog());
        return response()->json($programMenus);
    }

    public function storeSideBar(Request $request)
    {
        $image = $request->file('banner');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/aboutPage/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->about_settings_id)){
            $aboutSettings = AboutSettings::find($request->about_settings_id);
            if($image){
                if(file_exists($aboutSettings->banner)){
                    unlink($aboutSettings->banner);
                }
                $aboutSettings->banner = $imgUrl;
            }
        }else{
            $aboutSettings = new AboutSettings();
            $aboutSettings->about_settings_id = floor(time() - 999999999);
            $aboutSettings->banner = isset($imgUrl) ? $imgUrl : '';
        }
        $aboutSettings->menu_name = '';
        $aboutSettings->position = $request->position;
        $aboutSettings->tittle = $request->tittle;
        $aboutSettings->description = $request->description;
        $aboutSettings->page_id = $request->page_id;
        $aboutSettings->button_status = $request->button_status;
        $aboutSettings->program_id = $request->program_id;
        $aboutSettings->status = $request->status;
        if ($aboutSettings->save()) {
            session()->flash('success', 'SideBar updated successfully.');
            return redirect()->route('sideBar')->with('success', 'Side Bar info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Side Bar info Save Failed');
    }
}
