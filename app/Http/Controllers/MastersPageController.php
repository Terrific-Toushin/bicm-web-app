<?php

namespace App\Http\Controllers;

use App\Models\MastersProgram;
use App\Models\MastersForm;
use App\Models\MastersSettings;
use App\Models\Pages;
use Illuminate\Http\Request;

class MastersPageController extends Controller
{
    public function index()
    {
        $masterSettings = MastersSettings::first();
        $programInfo = MastersProgram::orderBy('masters_program_id','ASC')->get();
        return view('admin.masterPage.masterPage',['masterSettings'=>$masterSettings,"programInfo" => $programInfo]);
    }

    public function addMastersProgram()
    {
        $pages = Pages::select('page_id','page_name','menu_tittle')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('page_type','master')->where('pages.status','Y')->get();
        return view('admin.masterPage.addMastersProgram',['pages' => $pages]);
    }

    public function addMastersForm()
    {
        return view('admin.masterPage.addMastersForm');
    }

    public function editMastersProgram($id)
    {
        $mastersProgram = MastersProgram::find($id);
        $pages = Pages::select('page_id','page_name','menu_tittle')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('page_type','master')->where('pages.status','Y')->get();
        $this->createDBAccessLog('Edit Master Page View','MPV',$id,'Edit Master Page View');
        return view('admin.masterPage.editMastersProgram',['mastersProgram'=>$mastersProgram, 'pages' => $pages]);
    }

    public function storeMastersProgram(Request $request)
    {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'assets/frontend/images/mastersProgram/';
        $image->move('public/'.$directory, $imageName);
        $imgUrl = $directory . $imageName;

        $mastersProgram = new MastersProgram();
        $mastersProgram->masters_program_id = floor(time() - 999999999);
        $mastersProgram->image = $imgUrl;
        $mastersProgram->tittle = $request->tittle;
        $mastersProgram->page_id = $request->page_id;
        $mastersProgram->schedule = $request->schedule;
        $mastersProgram->duration = $request->duration;
        $mastersProgram->amount = $request->amount;
        $mastersProgram->status = $request->status;
        $mastersProgram->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $mastersProgram->about = $request->about;
        $mastersProgram->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $mastersProgram->pedagogy = $request->pedagogy;
        $mastersProgram->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $mastersProgram->courseStructure = $request->courseStructure;
        $mastersProgram->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $mastersProgram->teachingMethods = $request->teachingMethods;
        $mastersProgram->gradingPolicyShow = isset($request->gradingPolicyShow) ? $request->gradingPolicyShow : 'N';
        $mastersProgram->gradingPolicy = $request->gradingPolicy;
        $mastersProgram->feesChargesShow = isset($request->feesChargesShow) ? $request->feesChargesShow : 'N';
        $mastersProgram->feesCharges = $request->feesCharges;
        $mastersProgram->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $mastersProgram->download = $request->download;
        if ($mastersProgram->save()) {
            $this->createDBAccessLog('New Master Page','NMP',$request,'New Master Page');
            return redirect(url('/masters-page'))->with('message', 'Program info Save successfully');
        } else
            return redirect()->back()->with('message', 'Program info Save Failed');
    }
    public function updateMastersProgram(Request $request)
        {
            $mastersProgram = MastersProgram::find($request->masters_program_id);
            if($mastersProgram){
                $image = $request->file('image');
                if ($image){
                    $imageName = $image->getClientOriginalName();
                    $directory = 'assets/frontend/images/mastersProgram/';
                    $image->move('public/'.$directory, $imageName);
                    $imgUrl = $directory . $imageName;
                }else{
                    $imgUrl = $mastersProgram->image;
                }
            }
            $mastersProgram->image = $imgUrl;
            $mastersProgram->tittle = $request->tittle;
            $mastersProgram->page_id = $request->page_id;
            $mastersProgram->schedule = $request->schedule;
            $mastersProgram->duration = $request->duration;
            $mastersProgram->amount = $request->amount;
            $mastersProgram->status = $request->status;
            $mastersProgram->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
            $mastersProgram->about = $request->about;
            $mastersProgram->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
            $mastersProgram->pedagogy = $request->pedagogy;
            $mastersProgram->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
            $mastersProgram->courseStructure = $request->courseStructure;
            $mastersProgram->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
            $mastersProgram->teachingMethods = $request->teachingMethods;
            $mastersProgram->gradingPolicyShow = isset($request->gradingPolicyShow) ? $request->gradingPolicyShow : 'N';
            $mastersProgram->gradingPolicy = $request->gradingPolicy;
            $mastersProgram->feesChargesShow = isset($request->feesChargesShow) ? $request->feesChargesShow : 'N';
            $mastersProgram->feesCharges = $request->feesCharges;
            $mastersProgram->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
            $mastersProgram->download = $request->download;
            if ($mastersProgram->save()) {
                $this->createDBAccessLog('Update Master Page','UMP',$request,'Update Master Page');
                return redirect(url('/masters-page'))->with('message', 'Program info Update successfully');
            } else
                return redirect()->back()->with('message', 'Program info Update Failed');
        }

    public function storeSetting(Request $request)
    {
        $image = $request->file('banner');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/masterPage/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->mastersSettingId)){
            $mastersProgram = MastersSettings::find($request->mastersSettingId);
            if($image){
                if(file_exists($mastersProgram->banner)){
                    unlink($mastersProgram->banner);
                }
                $mastersProgram->banner = $imgUrl;
            }
        }else{
            $mastersProgram = new MastersSettings();
            $mastersProgram->masters_setting_id = floor(time() - 999999999);
            $mastersProgram->banner = $imgUrl;
        }
        $mastersProgram->tittle = $request->tittle;
        $mastersProgram->short_description = $request->shortDescription;
        if ($mastersProgram->save()) {
            $this->createDBAccessLog('Master Page Settings','MPS',$request,'Master Page Settings');
            return redirect()->route('mastersPage')->with('message', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('message', 'Program info Save Failed');
    }
}
