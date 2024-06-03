<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('loginPage.index');
    }

    public function login(Request $req)
    {
        //validate form input
        $res = $req->validate(['email' => ['required', 'email'], 'password' => ['required']]);
        if (Auth::attempt(['email' => $res['email'], 'password' => $req['password']])) {
            $req->session()->regenerate();
            $user = User::where('email', $req['email'])->first();
            flash()->option('position', 'top-center')->option('timeout', '')->success("login 
            success");

            if ($user->roles[0]['role'] === 'PROVIDER') {
                return redirect()->intended(route('provider.index'));
            } else if ($user->roles[0]['role'] === "CAREGIVER") {
                return redirect()->intended(route('caregiver.index'));
            }
        } else {
            flash()->option('position', 'top-center')->option('timeout', '')->error("Login failed. Please double check your email and password");
            return back()->withInput()->onlyInput('email');
        }
    }
}
