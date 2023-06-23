<?php

namespace App\Http\Controllers;

use App\Models\HomeOverview;
use App\Models\HomeSettings;
use App\Models\HomeService;
use App\Models\HomeWhy;
use App\Models\HomeProject;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $homeSettings = HomeSettings::orderBy('home_settings_id','ASC')->get();
        $homeService = HomeService::orderBy('home_service_id','ASC')->get();
        $homeOverview = HomeOverview::orderBy('home_overview_id','ASC')->get();
        $homeWhy = HomeWhy::orderBy('home_why_id','ASC')->get();
        $homeProject = HomeProject::orderBy('home_project_id','ASC')->get();
        return view('admin.homePage.homePage',[
            'homeSettings'=>$homeSettings,
            'homeService'=>$homeService,
            'homeWhy'=>$homeWhy,
            'homeProject'=>$homeProject,
            'homeOverview'=>$homeOverview
        ]);
    }

    public function newSection($id)
    {
        if($id != 'new'){
            $homeSettings = HomeSettings::find($id);
        }else{
            $homeSettings = null;
        }
        return view('admin.homePage.sectionHomePage',['homeSettings' => $homeSettings]);
    }

    public function newService($id)
    {
        if($id != 'new'){
            $homeService = HomeService::find($id);
        }else{
            $homeService = null;
        }
        return view('admin.homePage.serviceHomePage',['homeService' => $homeService]);
    }

    public function newOverview($id)
    {
        if($id != 'new'){
            $homeOverview = HomeOverview::find($id);
        }else{
            $homeOverview = null;
        }
        return view('admin.homePage.overviewHomePage',['homeOverview' => $homeOverview]);
    }

    public function newWhy($id)
    {
        if($id != 'new'){
            $homeWhy = HomeWhy::find($id);
        }else{
            $homeWhy = null;
        }
        return view('admin.homePage.whyHomePage',['homeWhy' => $homeWhy]);
    }

    public function newProject($id)
    {
        if($id != 'new'){
            $homeProject = HomeProject::find($id);
        }else{
            $homeProject = null;
        }
        return view('admin.homePage.projectHomePage',['homeProject' => $homeProject]);
    }

    public function storeHomeSetting(Request $request)
    {
        $image = $request->file('banner');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/homePage/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->mastersSettingId)){
            $homeSettings = HomeSettings::find($request->homeSettingId);
            if($image){
                if(file_exists($homeSettings->banner)){
                    unlink($homeSettings->banner);
                }
                $homeSettings->banner = $imgUrl;
            }
        }else{
            $homeSettings = new HomeSettings();
            $homeSettings->home_settings_id = floor(time() - 999999999);
            $homeSettings->banner = $imgUrl;
        }
        $homeSettings->tittle = $request->tittle;
        $homeSettings->short_description = $request->shortDescription;
        if ($homeSettings->save()) {
            return redirect()->route('homePage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }
}
