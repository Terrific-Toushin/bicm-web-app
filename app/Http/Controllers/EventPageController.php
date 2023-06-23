<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\EventsSettings;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index()
    {
        $eventsSettings = EventsSettings::first();
        $eventInfo = Events::orderBy('events_id','ASC')->get();
        return view('admin.eventPage.eventPage',['eventsSettings'=>$eventsSettings,"eventInfo" => $eventInfo]);
    }

    public function addEventsProgram()
    {
        return view('admin.eventPage.addEvent');
    }

    public function editEventsProgram($id)
    {
        $event = Events::find($id);
        return view('admin.eventPage.editevent',['event'=>$event]);
    }

    public function storeEventsProgram(Request $request)
    {
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $directory = 'assets/frontend/images/events/';
        $image->move('public/'.$directory, $imageName);
        $imgUrl = $directory . $imageName;

        $event = new Events();
        $event->events_id = floor(time() - 999999999);
        $event->image = $imgUrl;
        $event->tittle = $request->tittle;
        $event->schedule = $request->schedule;
        $event->duration = $request->duration;
        $event->amount = $request->amount;
        $event->author = $request->author;
        $event->shortDescription = $request->shortDescription;
        $event->status = $request->status;
        $event->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $event->about = $request->about;
        $event->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $event->pedagogy = $request->pedagogy;
        $event->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $event->courseStructure = $request->courseStructure;
        $event->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $event->teachingMethods = $request->teachingMethods;
        $event->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $event->download = $request->download;
        if ($event->save()) {
            return redirect(url('/events-page'))->with('success', 'event info Save successfully');
        } else
            return redirect()->back()->with('failed', 'event info Save Failed');
    }
    public function updateEventsProgram(Request $request)
    {
        $event = Events::find($request->events_id);
        if($event){
            $image = $request->file('image');
            if ($image){
                $imageName = $image->getClientOriginalName();
                $directory = 'assets/frontend/images/events/';
                $image->move('public/'.$directory, $imageName);
                $imgUrl = $directory . $imageName;
            }else{
                $imgUrl = $event->image;
            }
        }
        $event->image = $imgUrl;
        $event->tittle = $request->tittle;
        $event->schedule = $request->schedule;
        $event->duration = $request->duration;
        $event->amount = $request->amount;
        $event->author = $request->author;
        $event->shortDescription = $request->shortDescription;
        $event->status = $request->status;
        $event->aboutShow = isset($request->aboutShow) ? $request->aboutShow : 'N';
        $event->about = $request->about;
        $event->pedagogyShow = isset($request->pedagogyShow) ? $request->pedagogyShow : 'N';
        $event->pedagogy = $request->pedagogy;
        $event->courseStructureShow = isset($request->courseStructureShow) ? $request->courseStructureShow : 'N';
        $event->courseStructure = $request->courseStructure;
        $event->teachingMethodsShow = isset($request->teachingMethodsShow) ? $request->teachingMethodsShow : 'N';
        $event->teachingMethods = $request->teachingMethods;
        $event->downloadShow = isset($request->downloadShow) ? $request->downloadShow : 'N';
        $event->download = $request->download;
        if ($event->save()) {
            return redirect(url('/events-page'))->with('success', 'event info Update successfully');
        } else
            return redirect()->back()->with('failed', 'event info Update Failed');
    }

    public function storeSetting(Request $request)
    {
        $image = $request->file('banner');
        if ($image){
            $imageName = $image->getClientOriginalName();
            $directory = 'assets/frontend/images/eventPage/';
            $image->move('public/'.$directory, $imageName);
            $imgUrl = $directory . $imageName;
        }
        if (isset($request->mastersSettingId)){
            $eventsSettings = EventsSettings::find($request->mastersSettingId);
            if($image){
                if(file_exists($eventsSettings->banner)){
                    unlink($eventsSettings->banner);
                }
                $eventsSettings->banner = $imgUrl;
            }
        }else{
            $eventsSettings = new EventsSettings();
            $eventsSettings->events_settings_id = floor(time() - 999999999);
            $eventsSettings->banner = $imgUrl;
        }
        $eventsSettings->tittle = $request->tittle;
        $eventsSettings->short_description = $request->shortDescription;
        if ($eventsSettings->save()) {
            return redirect()->route('eventsPage')->with('success', 'Settings info Save successfully');
        } else
            return redirect()->back()->with('failed', 'Settings info Save Failed');
    }
}
