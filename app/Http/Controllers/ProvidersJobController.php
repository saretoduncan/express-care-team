<?php

namespace App\Http\Controllers;

use App\Models\ProvidersJobsModel;
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
        $user_provider = User::find(Auth::user()->id)->load('roles');
        if (!isset($user_provider)) {
            flashError("Please login first");
            return back()->withInput();
        }

        if (!$user_provider->roles->contains('role', 'PROVIDER')) {
            flashError("This function is reserved only for providers only");
            return back()->withInput();
        }

        $savedData = ProvidersJobsModel::create([
            'work_type' => $validated['work_type'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'shift_start' => $validated['shift_start'],
            'shift_end' => $validated['shift_end'],
            'people_needed' => $validated['people_needed'],
            'rate_per_hour' => $validated['rate_per_hour'],
            'payment_period' => $validated['payment_period'],
            'certificates_needed' => serialize($validated['certificates_needed']),
            'role' => $validated['role'],
            'user_id' => Auth::user()->id,


        ]);
        flashSuccess("Job posted successfully");
        return redirect(route('provider.index'));
    }
    
}
