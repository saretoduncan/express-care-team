<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaregiversControllers extends Controller
{
    //
    public function index()
    {
        $user = Auth::getUser();
        $retrievedUser = User::find($user->id)->load('roles')->load('caregiver');

        return view('caregivers.index', ['user' => $retrievedUser]);
    }
}
