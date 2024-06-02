<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\UserAuthorities;
use App\Models\UserCaregiver;
use App\Models\UserRoles;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    //
    public function index()
    {
        return view('signUpPage.index');
    }
    public function caregiver()
    {
        return view('signUpPage.caregiver');
    }
    public function provider()
    {
        return view('signUpPage.provider');
    }
    public function storeProvider(Request $req)
    {
    }
    public function storeProviderHomeInfo(Request $req)
    {
    }

    public function storeCaregiver(Request $req)
    {
        $validatedData = $req->validate([
            "first_name" => ['required', 'min:2', 'string'],
            "last_name" => ['required', 'min:2', 'string'],
            "email" => ['required', 'email'],
            "date_of_birth" => ['required', 'date'],
            "gender" => ['required'],
            "state" => ['required'],
            "city" => ['required'],
            'street'=>['required'],
            "zipcode" => ['required'],
            "phone_number" => ['required'],
            "terms" => ['required', 'accepted'],
            "password" => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
        ]);

        $user = User::where('email', $validatedData['email'])->first();
        if (isset($user)) {
            flash()->option('position', 'top-center')->option('timeout', '')->error("Email is already registered with us");
            return back()->withInput();
        }
        try {
            $saveUser = $this->saveNewUser(
                $validatedData['first_name'],
                $validatedData['last_name'],
                $validatedData['email'],
                $validatedData['password']
            );
            $role = UserRoles::where('role', 'CAREGIVER')->first();
            $saveUser->roles()->attach($role->id);
            $savedData= UserCaregiver::create([
                'user_id'=>$saveUser->id,
                'date_of_birth'=>$validatedData['date_of_birth'],
                'gender'=>$validatedData['gender'],
                'phone_number'=>$validatedData['phone_number'],
                'state'=>$validatedData['state'],
                'city'=>$validatedData['city'],
                'zipcode'=>$validatedData['zipcode'],
                'street'=>$validatedData['street']
            ]);
        } catch (QueryException $e) {
            flash()->option('position', 'top-center')->option('timeout', '')->error($e->getMessage());
            return back()->withInput();
        } catch (Exception $e) {
            flash()->option('position', 'top-center')->option('timeout', '')->error($e->getMessage());
            return back()->withInput();
        }







       
        return redirect(route('signup.caregiver'));
    }
    protected function saveNewUser(string $first_name, string $last_name, string $email, string $password)
    {
        $newUser = User::create([
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'password' => Hash::make($password),
            'terms_accepted' => true
        ]);
        return $newUser;
    }
}
