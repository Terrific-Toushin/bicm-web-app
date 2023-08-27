<?php

namespace App\Http\Controllers;

use App\Models\FormGroup;
use App\Models\FormGroupField;
use Illuminate\Http\Request;
use DB;
class FormController extends Controller
{
    public function createForm(){
        return view('admin.forms.createForm');
    }
    public function formList(){
        $fromGroups = FormGroup::orderBy('created_at','ASC')->get();
        return view('admin.forms.formList')->with(compact('fromGroups'));
    }


    public function detailsFormJson($id){
        $query = FormGroup::leftJoin("ev_form_group_fields", "ev_form_groups.id", "=", "ev_form_group_fields.group_id");
        $data = $query->select("ev_form_groups.id", "name", "status", "ev_form_groups.created_at", "ev_form_group_fields.id as group_field_id", "group_id", "flabel", "fname", "fid",
            "ftype","foption_value", "fdefault_value", "fmax_char", "forder", "frequired", "fclass", "ev_form_group_fields.created_at")
            ->where("ev_form_groups.id", $id)
            ->orderBy("ev_form_group_fields.forder","ASC")
            ->get();
        return response()->json($data);
    }


    public function detailsForm($id){
        $fromGroupFields = FormGroupField::where('group_id',$id)->orderBy('created_at','ASC')->get();
        return view('admin.forms.formDetails')->with(compact('id'));
    }


    public function editForm($id){
        $fromGroupFields = FormGroupField::orderBy('created_at','ASC')->get();
        return view('admin.forms.formEdit')->with(compact('fromGroupFields'));
    }

    public function addForm(Request $request){
        // Create
        if ($request->input('id') != ''){
            $dataObj = FormGroup::find($request->input('id'));
            $id = $request->input('id');
            $fgf_results = DB::table('ev_form_group_fields')->where('group_id',$id)->delete();
        }else{
            $dataObj =  new FormGroup;
            $id = strrev(time());
            $dataObj->id = $id;
        }
        $dataObj->name = $request->input('name');
        $dataObj->status = $request->input('status');
        $formfields = $request->input('formfields');
        // insert data into ev_form_groups table
        if($dataObj->save()) {
            // insert field data of formgroup into ev_form_group_fields table
            $fields = [];
            foreach ($formfields as $key => $item) {
                $fields[$key]['id'] = strrev(time()).$key;
                $fields[$key]['group_id'] = $id;
                $fields[$key]['flabel'] = isset($item['label']) ? $item['label'] : '';
                $fields[$key]['fname'] = isset($item['name']) ? $item['name'] : '';
                $fields[$key]['fid'] = isset($item['fid']) ? $item['fid'] : '';
                $fields[$key]['ftype'] = isset($item['type']) ? $item['type'] : '';
                $fields[$key]['foption_value'] = isset($item['options_value']) ? $item['options_value'] : '';
                $fields[$key]['fdefault_value'] = isset($item['default_value']) ? $item['default_value'] : '';
                $fields[$key]['fmax_char'] = isset($item['fmax_char']) ? $item['fmax_char'] : '';
                $fields[$key]['forder'] = isset($item['forder']) ? $item['forder'] : '';
                $fields[$key]['frequired'] = isset($item['required']) ? $item['required'] : '0';
                $fields[$key]['fclass'] = isset($item['class']) ? $item['class'] : '';
            }
            $fgf_results = DB::table('ev_form_group_fields')->insert($fields);
            if($fgf_results){
                $responseMsg = [
                    'result' => true,
                    'message' => "This item has been added successfully!",
                ];
                return response()->json($responseMsg);
            }
            $responseMsg =  [
                'result' => true,
                'message' => "This item has been added successfully but Fields item have not been added successfully!",
            ];
            return response()->json($responseMsg);
        }
        $responseMsg =  [
            'result'  => false,
            'message'  => "This item has not been added successfully!"
        ];
        return response()->json($responseMsg);
    }

}
