<?php

namespace App\Http\Controllers;

use App\Models\FormGroup;
use App\Models\Menus;
use App\Models\Pages;
use Illuminate\Http\Request;
use Validator;
use DB;

class PagesController extends Controller
{
    public function index()
    {
        $menusAll = Menus::select('menu_id','menu_tittle')->where('status','Y')->get();
        $menus[0] = 'Main Menu';
        foreach ($menusAll as $allMenu){
            $menus[$allMenu->menu_id] = $allMenu->menu_tittle;
        }
        $pageSettings = Pages::orderBy('page_id','ASC')->get();
        $pageTypes = config("dashboard_constant.PAGE_TYPE");
        return view('admin.pages.pages',[
            'pageSettings'=>$pageSettings,
            'pageTypes'=>$pageTypes,
            'menus'=>$menus,
        ]);
    }
    public function detailsPage($id)
    {
        if($id != 'new'){
            $pageSettings = Pages::find($id);
            $pageMenus = Menus::select('menu_id','menu_tittle')->where('status','Y')->where('parent_id',$pageSettings->parent_id)->orderBy('sort_order')->get();
        }else{
            $pageSettings = null;
            $pageMenus = null;
        }
        $mainMenu = Menus::selectRaw('GROUP_CONCAT(DISTINCT  parent_id) as menuId')->where('status','Y')->where('parent_id','!=','0')->first();
        $arrayMenu = explode(',',$mainMenu->menuId);
        $categoryMenus = Menus::where('status','Y')->whereIn('menu_id',$arrayMenu)->orderBy('sort_order')->get();
        $pageTypes = config("dashboard_constant.PAGE_TYPE");
        $FormGroupList = FormGroup::select('name','id')->where('status','Y')->orderBy('created_at','ASC')->get();
        return view('admin.pages.detailsPage',['pageSettings' => $pageSettings,'categoryMenus' => $categoryMenus,'pageTypes'=>$pageTypes,'pageMenus'=>$pageMenus,'FormGroupList'=>$FormGroupList]);
    }

    public function destroy($id)
    {
        // Find the item by ID
        $item = Pages::find($id);

        // Delete the item
        if ($item && $item->page_type == 'common') {
            if($item->delete()){
                session()->flash('success', 'Page deleted successfully.');
            }else{
                session()->flash('error', 'Page not found.');
            }
            return redirect()->route('allPages')->with('success', 'Page deleted successfully.');
        } else {
            return redirect()->route('allPages')->with('error', 'Page not found.');
        }
    }

    public function getMenu(Request $request)
    {
        $donePage = Pages::selectRaw('GROUP_CONCAT(DISTINCT  menu_id) as menuId')->first();
//        DB::enableQueryLog();
        $donePageArray = explode(',',$donePage->menuId);
        $pageMenus = Menus::selectRaw('menu_id,menu_tittle')->where('parent_id',$request->parent_id)->whereNotIn('menu_id',$donePageArray)->get();
//        dd(DB::getQueryLog());
        return response()->json($pageMenus);
    }

    public function storePagesSetting(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'parent_id' => 'required|string|max:10',
            'menu_id' => 'required|string|max:10',
            'page_name' => 'required|string|max:30',
            'heading' => 'nullable|string|max:150',
            'page_type' => 'required|string|max:30',
            'form_status' => 'required|string|max:1',
            'sidebar_status' => 'required|string|max:1',
            'status' => 'required|string|max:1',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $banner = $request->file('banner');
        $image = $request->file('image');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/pages/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if ($banner){
            $imageName = $banner->getClientOriginalName();
            $directory = 'assets/frontend/images/banner/pages/';
            $banner->move('public/'.$directory, $imageName);
            $bannerUrl = $directory . $imageName;
        }
        if (isset($request->page_id)){
            $pageSettings = Pages::find($request->page_id);
            if($image){
                if(file_exists($pageSettings->image)){
                    unlink($pageSettings->image);
                }
                $pageSettings->image = $imgUrl;
            }
            if($banner){
                if(file_exists($pageSettings->banner)){
                    unlink($pageSettings->banner);
                }
                $pageSettings->banner = $bannerUrl;
            }
        }else{
            $pageSettings = new Pages();
            $pageSettings->page_id = floor(time() - 999999999);
            $pageSettings->banner = isset($bannerUrl) ? $bannerUrl : '';
            $pageSettings->image = isset($imgUrl) ? $imgUrl : '';
        }
        $pageSettings->parent_id = $request->parent_id;
        $pageSettings->menu_id = $request->menu_id;
        $pageSettings->page_name = $request->page_name;
        $pageSettings->heading = $request->heading;
        $pageSettings->short_description = $request->short_description;
        $pageSettings->description = $request->description;
        $pageSettings->page_type = $request->page_type;
        $pageSettings->form_status = $request->form_status;
        $pageSettings->form_group = json_encode($request->form_group);
        $pageSettings->sidebar_status = $request->sidebar_status;
        $pageSettings->status = $request->status;

        if($pageSettings->save()){
            session()->flash('success', 'Page info Save successfully');
        }else{
            session()->flash('error', 'Page info Save Failed');
        }
        return redirect()->route('allPages');
    }
}
