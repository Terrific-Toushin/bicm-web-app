<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home.home');
    }

    public function service(){
        return view('frontend.service.service');
    }

    public function mastersProgram(){
        return view('frontend.mastersProgram.mastersProgram');
    }

    public function certificationTraining(){
        return view('frontend.certificationTraining.certificationTraining');
    }

    public function approch(){
        return view('frontend.approch.approch');
    }

    public function diploma(){
        return view('frontend.diploma.diploma');
    }
}
