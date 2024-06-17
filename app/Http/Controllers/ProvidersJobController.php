<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvidersJobController extends Controller
{
    //
    protected function getCurrentUser()
    {
        $user = Auth::getUser();
        $retrievedUser = User::find($user->id)->load('roles')->load('provider');
        return $retrievedUser;
    }
    public function createJob()
    {
        $user = $this->getCurrentUser();
        return view('providers.postJob', ['user' => $user]);
    }
    public function storeJob(Request $req)
    {

        $validated = $req->validate([
            'work_type' => ['required'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'shift_start' => ['required', 'date_format:H:i'],
            'shift_end' => ['required', 'date_format:H:i', 'after:shift_start'],
            'people_needed' => ['required',],
            'rate_per_hour' => ['required'],
            'payment_period' => ['required'],
            'role' => ['required'],
            'certificates_needed' => ['required', 'array'],
            'certificates_needed.*' => ['required']
        ]);
        dd($validated);
    }
}
