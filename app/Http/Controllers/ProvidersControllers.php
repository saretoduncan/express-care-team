<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersControllers extends Controller
{
    //
    public function index()
    {
        return view('providers.index');
    }
}
