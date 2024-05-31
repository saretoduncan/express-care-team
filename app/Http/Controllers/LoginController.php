<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    //
    public function index()
    {
        return view('loginPage.index');
    }

    public function login(Request $req)
    {

        $res = $req->validate(['email' => ['required', 'email'], 'password' => ['required', 'size:5']]);
        flash()->option('position','top-center')->option('timeout','')->success("login success");
        return redirect(route('login.index'));
    }
}
