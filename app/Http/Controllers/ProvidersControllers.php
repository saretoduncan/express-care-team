<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersControllers extends Controller
{
    protected function getCurrentUser()
    {
        $user = Auth::getUser();
        $retrievedUser = User::find($user->id)->load('roles')->load('provider')->load('providersJob');
        return $retrievedUser;
    }
    //
    public function index()
    {
        $user = $this->getCurrentUser();


        return view('providers.index', ['user' => $user]);
    }
    public function allProvidersJobs()
    {
        $user = $this->getCurrentUser();

        return view('providers.manageJobs', ['user' => $user]);
    }
    public function createJob()
    {
        $user = $this->getCurrentUser();
        return view('providers.postJob', ['user' => $user]);
    }
}
