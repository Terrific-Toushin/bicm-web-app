<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * get all constant variables
     */
    public function getConstVar(){
        return config("dashboard_constant");
    }
    /**
     * check file exists
     */
    public function isFileExists(Request $request){
        $filePath = $request->query('filepath');
        if(file_exists($filePath)){
            return true;
        }
        return false;
    }
}
