<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaregiversControllers extends Controller
{
    //
    public function index()
    {
        return view('caregivers.index');
    }
}
