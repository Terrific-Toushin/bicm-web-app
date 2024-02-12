<?php

namespace App\Http\Controllers;

use App\Models\AboutSettings;
use Illuminate\Http\Request;

class AboutPagesController extends Controller
{
    public function index()
    {
        $aboutSettings = AboutSettings::orderBy('about_settings_id','ASC')->get();
        return view('admin.aboutPage.aboutPage',[
            'aboutSettings'=>$aboutSettings
        ]);
    }
    public function newAboutMenu($id)
    {
        if($id != 'new'){
            $aboutSettings = AboutSettings::find($id);
//            $this->createDBAccessLog('');
        }else{
            $aboutSettings = null;
        }
        return view('admin.aboutPage.menuAboutPage',['aboutSettings' => $aboutSettings]);
    }

    public function storeAboutSetting(Request $request)
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
        $aboutSettings->menu_name = $request->menu_name;
        $aboutSettings->position = $request->position;
        $aboutSettings->tittle = $request->tittle;
        $aboutSettings->description = $request->description;
        $aboutSettings->url = $request->url;
        $aboutSettings->status = $request->status;
        if ($aboutSettings->save()) {
            return redirect()->route('aboutPage')->with('message', 'Menu info Save successfully');
        } else
            return redirect()->back()->with('message', 'Menu info Save Failed');
    }
}
