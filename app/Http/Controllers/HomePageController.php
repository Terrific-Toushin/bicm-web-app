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
        if (isset($request->home_settings_id)){
            $homeSettings = HomeSettings::find($request->home_settings_id);
            if($image){
                if(file_exists($homeSettings->banner)){
                    unlink($homeSettings->banner);
                }
                $homeSettings->banner = $imgUrl;
            }
        }else{
            $homeSettings = new HomeSettings();
            $homeSettings->home_settings_id = floor(time() - 999999999);
            $homeSettings->banner = isset($imgUrl) ? $imgUrl : '';
        }
        $homeSettings->section_name = $request->section_name;
        $homeSettings->tittle = $request->tittle;
        $homeSettings->description = $request->description;
        $homeSettings->status = $request->status;
        if ($homeSettings->save()) {
            return redirect()->route('homePage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }

    public function storeHomeService(Request $request)
    {
        $image = $request->file('image');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/homePage/service/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->home_service_id)){
            $homeService = HomeService::find($request->home_service_id);
            if($image){
                if(file_exists($homeService->image)){
                    unlink($homeService->image);
                }
                $homeService->image = $imgUrl;
            }
        }else{
            $homeService = new HomeService();
            $homeService->home_service_id = floor(time() - 999999999);
            $homeService->image = isset($imgUrl) ? $imgUrl : '';
        }
        $homeService->tittle = $request->tittle;
        $homeService->shortDescription = $request->shortDescription;
        $homeService->status = $request->status;
        $homeService->aboutShow = $request->aboutShow;
        $homeService->about = $request->about;
        $homeService->url = $request->url;
        if ($homeService->save()) {
            return redirect()->route('homePage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }

    public function storeHomeOverview(Request $request)
    {
        $image = $request->file('image');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/homePage/overview/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->home_overview_id)){
            $homeOverview = HomeOverview::find($request->home_overview_id);
            if($image){
                if(file_exists($homeOverview->image)){
                    unlink($homeOverview->image);
                }
                $homeOverview->image = $imgUrl;
            }
        }else{
            $homeOverview = new HomeOverview();
            $homeOverview->home_overview_id = floor(time() - 999999999);
            $homeOverview->image = isset($imgUrl) ? $imgUrl : '';
        }
        $homeOverview->tittle = $request->tittle;
        $homeOverview->shortDescription = $request->shortDescription;
        $homeOverview->status = $request->status;
        $homeOverview->aboutShow = $request->aboutShow;
        $homeOverview->about = $request->about;
        $homeOverview->url = $request->url;
        if ($homeOverview->save()) {
            return redirect()->route('homePage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }

    public function storeHomeWhy(Request $request)
    {
        $image = $request->file('image');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/homePage/why/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->home_why_id)){
            $homeWhy = HomeWhy::find($request->home_why_id);
            if($image){
                if(file_exists($homeWhy->image)){
                    unlink($homeWhy->image);
                }
                $homeWhy->image = $imgUrl;
            }
        }else{
            $homeWhy = new HomeWhy();
            $homeWhy->home_why_id = floor(time() - 999999999);
            $homeWhy->image = isset($imgUrl) ? $imgUrl : '';
        }
        $homeWhy->tittle = $request->tittle;
        $homeWhy->shortDescription = $request->shortDescription;
        $homeWhy->status = $request->status;
        $homeWhy->aboutShow = $request->aboutShow;
        $homeWhy->about = $request->about;
        $homeWhy->url = $request->url;
        if ($homeWhy->save()) {
            return redirect()->route('homePage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }

    public function storeHomeProject(Request $request)
    {
        $image = $request->file('image');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/homePage/project/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->home_project_id)){
            $homeProject = HomeProject::find($request->home_project_id);
            if($image){
                if(file_exists($homeProject->image)){
                    unlink($homeProject->image);
                }
                $homeProject->image = $imgUrl;
            }
        }else{
            $homeProject = new HomeProject();
            $homeProject->home_project_id = floor(time() - 999999999);
            $homeProject->image = isset($imgUrl) ? $imgUrl : '';
        }
        $homeProject->tittle = $request->tittle;
        $homeProject->shortDescription = $request->shortDescription;
        $homeProject->status = $request->status;
        $homeProject->aboutShow = $request->aboutShow;
        $homeProject->about = $request->about;
        $homeProject->url = $request->url;
        if ($homeProject->save()) {
            return redirect()->route('homePage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }
}
