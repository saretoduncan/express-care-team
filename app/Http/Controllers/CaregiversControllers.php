<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaregiversControllers extends Controller
{
    protected function getCurrentUser()
    {
        $user = Auth::getUser();
        return User::find($user->id)->load('roles')->load('caregiver');
    }
    //dashboard
    public function index()
    {
        $retrievedUser = $this->getCurrentUser();
        return view('caregivers.index', ['user' => $retrievedUser]);
    }
    //my jobs
    public function myJobs()
    {
        $currentUser = $this->getCurrentUser();
        return view('caregivers.myJobs', ['user' => $currentUser]);
    }
    public function savedJobs()
    {
        $currentUser = $this->getCurrentUser();
        return view('caregivers.savedJobs', ['user' => $currentUser]);
    }
}
