<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(){
        return view('signUpPage.index');
    }
    public function caregiver(){
        return view('signUpPage.caregiver');
    }
    public function provider(){
        return view('signUpPage.provider');
    }
}
