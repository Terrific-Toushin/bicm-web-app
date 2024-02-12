<?php

namespace App\Http\Controllers;

use App\Models\LibrarySettings;
use Illuminate\Http\Request;

class LibraryPagesController extends Controller
{
    public function index()
    {
        $librarySettings = LibrarySettings::orderBy('library_settings_id','ASC')->get();
        return view('admin.libraryPage.libraryPage',[
            'librarySettings'=>$librarySettings
        ]);
    }
    public function newLibraryMenu($id)
    {
        if($id != 'new'){
            $librarySettings = LibrarySettings::find($id);
        }else{
            $librarySettings = null;
        }
        return view('admin.libraryPage.menuLibraryPage',['librarySettings' => $librarySettings]);
    }

    public function storeLibrarySetting(Request $request)
    {
        $image = $request->file('banner');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/libraryPage/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->library_settings_id)){
            $librarySettings = LibrarySettings::find($request->library_settings_id);
            if($image){
                if(file_exists($librarySettings->banner)){
                    unlink($librarySettings->banner);
                }
                $librarySettings->banner = $imgUrl;
            }
        }else{
            $librarySettings = new LibrarySettings();
            $librarySettings->library_settings_id = floor(time() - 999999999);
            $librarySettings->banner = isset($imgUrl) ? $imgUrl : '';
        }
        $librarySettings->tittle = $request->tittle;
        $librarySettings->description = $request->description;
        $librarySettings->url = $request->url;
        $librarySettings->status = $request->status;
        if ($librarySettings->save()) {
            return redirect()->route('libraryPage')->with('message', 'Menu info Save successfully');
        } else
            return redirect()->back()->with('message', 'Menu info Save Failed');
    }
}
