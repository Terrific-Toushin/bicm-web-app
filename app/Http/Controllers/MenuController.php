<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Models\Pages;
use Illuminate\Http\Request;
use Validator;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menus::orderBy('menu_id','ASC')->get()->toArray();
//        $menus = Menus::orderBy('menu_id','ASC')->get()->keyBy('menu_id')->toArray();
        $result = [];
        array_map(function($a) use (&$result){
            $result[$a['menu_id']] = $a;
        }, $menus);
        return view('admin.menu.menu',[
            'menus'=>$result
        ]);
    }
    public function newMenu($id,$parentId)
    {
        if($id != 'new'){
            $menus = Menus::find($id);
        }else{
            $menus = null;
        }
        $allMenu = Menus::where('sub_menu','Y')->orderBy('menu_id','ASC')->get();
        $menuPosition['0'] = implode(',',Menus::select('sort_order')->where('parent_id','0')->orderBy('menu_id','ASC')->pluck('sort_order')->toArray());
        foreach ($allMenu as $menu){
            $menuPosition[$menu->menu_id] = implode(',',Menus::select('sort_order')->where('parent_id',$menu->menu_id)->orderBy('menu_id','ASC')->pluck('sort_order')->toArray());
        }
        return view('admin.menu.menuEdit',['menus' => $menus, 'allMenu' => $allMenu, 'parentId' => $parentId, 'menuPosition' => json_encode($menuPosition)]);
    }
    public function destroy($id)
    {
        // Find the item by ID
        $item = Menus::find($id);

        // Delete the item
        if ($item) {
            if(Menus::where('menu_id', $id)->orWhere('parent_id', $id)->delete()){
                Pages::where('menu_id', $id)->delete();
                session()->flash('success', 'Menu deleted successfully.');
            }else{
                session()->flash('error', 'Menu not found.');
            }
            return redirect()->route('allMenu')->with('success', 'Menu deleted successfully.');
        } else {
            return redirect()->route('allMenu')->with('error', 'Menu not found.');
        }
    }

    public function detailsMenu($parentId)
    {
        $childMenus = Menus::where('parent_id',$parentId)->orderBy('sort_order')->get()->toArray();
        return view('admin.menu.detailsMenu',['childMenus' => $childMenus,'parentId' => $parentId]);
    }

    public function storeMenu(Request $request)
    {
        Validator::make($request->all(),[
            'menu_tittle' => 'required|string|max:100',
            'parent_id' => 'required|string|max:10',
            'sort_order' => 'required|string|max:2',
            'url' => 'required|string|max:150',
            'status' => 'required|string|max:1',
        ])->validate();

        if (isset($request->menu_id)){
            $menus = Menus::find($request->menu_id);
        }else{
            $menus = new Menus();
            $menus->menu_id = floor(time() - 999999999);
        }
        $menus->menu_tittle = $request->menu_tittle;
        $menus->parent_id = $request->parent_id;
        $menus->sort_order = $request->sort_order;
        $menus->sub_menu = $request->sub_menu;
        $menus->url = $request->url;
        $menus->status = $request->status;
        if ($menus->save()) {
            return to_route('allMenu')->with('success', 'Menu info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Menu info Save Failed');
    }
}
