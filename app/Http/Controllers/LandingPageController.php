<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        return view('landingPage.index');
    }

    public function caregivers()
    {
        return view('landingPage.caregivers');
    }

    public function providers()
    {
        return view('landingPage.providers');
    }
}
