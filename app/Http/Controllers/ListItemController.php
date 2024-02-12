<?php

namespace App\Http\Controllers;

use App\Models\ListSettings;
use App\Models\Course;
use App\Models\Events;
use App\Models\MastersProgram;
use App\Models\Pages;
use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function index()
    {
        $listItems = ListSettings::select('list_settings.*','pages.page_name')->leftJoin('pages','list_settings.page_id','=','pages.page_id')->orderBy('list_id','ASC')->get();
        return view('admin.listItem.listItem',[
            'listItems'=>$listItems
        ]);
    }
    public function newListItem($id)
    {
        if($id != 'new'){
            $listItems = ListSettings::find($id);
        }else{
            $listItems = null;
        }
        $pages = Pages::select('page_id','page_name','menu_tittle','page_type')->leftJoin('menus','menus.menu_id','=','pages.menu_id')->where('page_type','list')->where('pages.status','Y')->get();
//        dump($pages);
//        die();
        return view('admin.listItem.listItemEdit',['listItems' => $listItems, "pages" => $pages]);
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

    public function storeListItem(Request $request)
    {
        $image = $request->file('image');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/listItem/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->list_id)){
            $listSettings = ListSettings::find($request->list_id);
            if($image){
                if(file_exists($listSettings->image)){
                    unlink($listSettings->image);
                }
                $listSettings->image = $imgUrl;
            }
        }else{
            $listSettings = new ListSettings();
            $listSettings->list_id = floor(time() - 999999999);
            $listSettings->image = isset($imgUrl) ? $imgUrl : '';
        }
        $listSettings->position = $request->position;
        $listSettings->tittle = $request->tittle;
        $listSettings->sub_tittle = $request->sub_tittle;
        $listSettings->description = $request->description;
        $listSettings->page_id = $request->page_id;
        $listSettings->contact_link = $request->contact_link;
        $listSettings->contact = $request->contact;
        $listSettings->status = $request->status;
        if ($listSettings->save()) {
            session()->flash('success', 'List Item updated successfully.');
            return redirect()->route('listItem')->with('message', 'List Item info Save successfully');
        } else
            return redirect()->back()->with('message', 'List Item info Save Failed');
    }
}
