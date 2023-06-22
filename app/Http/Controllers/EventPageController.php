<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\EventsSettings;

class EventPageController extends Controller
{
    public function index(){
        return view('admin.eventPage.eventPage');
    }
    public function addEvent(){
        return view('admin.masterPage.addcourseProgram');
    }
    public function storeEvent(Request $request){
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = './frontEnd/assets/images/courses/';
        $image->move($directory, $imageName);
        $imgUrl = $directory.$imageName;

        $courseProgram=new Course;
        $courseProgram->courseProgram_id          = $request->product_name;
        $courseProgram->category_id               = $request->category_id;
        $courseProgram->subCategory_id            = $request->subCategory_id;
        $courseProgram->subCategoryContent_id     = $request->subCategoryContent_id;
        $courseProgram->product_type              = $request->product_type;
        $courseProgram->ratings                   = $request->ratings;
        $courseProgram->price                     = $request->price;
        $courseProgram->image                     = $imgUrl;
        $courseProgram->newPrice                  = $request->newPrice;
        $courseProgram->quantity                  = $request->quantity;
        $courseProgram->description               = $request->description;
        $courseProgram->product_specification     = $request->product_specification;
        $courseProgram->promotion                 = $request->promotion;
        $courseProgram->tags                      = $request->tags;
        $courseProgram->colors                    = $request->colors;
        $courseProgram->publication_status        = $request->publication_status;
        if($courseProgram->save()){
            return redirect()->route('coursePage')->with('success','Program info Save successfully');
        }else
            return redirect()->back()->with('failed','Program info Save Failed');
    }
    public function storeSetting(Request $request){
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = './frontEnd/assets/images/courses/';
        $image->move($directory, $imageName);
        $imgUrl = $directory.$imageName;

        $courseProgram=new Course;
        $courseProgram->courseProgram_id          = $request->product_name;
        $courseProgram->category_id               = $request->category_id;
        $courseProgram->subCategory_id            = $request->subCategory_id;
        $courseProgram->subCategoryContent_id     = $request->subCategoryContent_id;
        $courseProgram->product_type              = $request->product_type;
        $courseProgram->ratings                   = $request->ratings;
        $courseProgram->price                     = $request->price;
        $courseProgram->image                     = $imgUrl;
        $courseProgram->newPrice                  = $request->newPrice;
        $courseProgram->quantity                  = $request->quantity;
        $courseProgram->description               = $request->description;
        $courseProgram->product_specification     = $request->product_specification;
        $courseProgram->promotion                 = $request->promotion;
        $courseProgram->tags                      = $request->tags;
        $courseProgram->colors                    = $request->colors;
        $courseProgram->publication_status        = $request->publication_status;
        if($courseProgram->save()){
            return redirect()->route('coursePage')->with('success','Program info Save successfully');
        }else
            return redirect()->back()->with('failed','Program info Save Failed');
    }
}
