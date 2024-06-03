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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\Input;

use function Laravel\Prompts\error;

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
    //register provider info
    public function storeProvider(Request $req)
    {
        //validate form input
        $validatedData = $req->validate([
            "first_name" => ['required', 'min:2', 'string'],
            "last_name" => ['required', 'min:2', 'string'],
            "email" => ['required', 'email'],
            "password" => ['required', password::min(8)->letters()->numbers()],
            'password_confirmation' => ['required'],
            "terms" => ['required', 'accepted'],

        ]);
        //check password and password confirmation match
        if ($validatedData['password_confirmation'] !== $validatedData['password']) {
            flash()->options(['postion' => 'top-center', 'timeout' => ''])->error('password does\'t match');
            return  back()->withInput()->withErrors(['password_confirmation' => 'password does\'t match']);
        };
        // check whether the user is registered
        $user = User::where('email', $validatedData['email'])->first();
        if (isset($user)) {
            flash()->option('position', 'top-center')->option('timeout', '')->error("Email is already registered with us");
            return back()->withInput();
        };
        //save user
        try {
            $savedUser = $this->saveNewUser(
                $validatedData['first_name'],
                $validatedData['last_name'],
                $validatedData['email'],
                $validatedData['password']
            );
            //assign role
            $role = UserRoles::where('role', 'PROVIDER')->first();
            $savedUser->roles()->attach($role->id); 
             //login the user
            Auth()->login($savedUser);
            return back()->withInput();
        } catch (QueryException $e) {
            flash()->option('position', 'top-center')->option('timeout', '')->error('something went wrong while saving you data. Please try again');
            error_log($e->getMessage());
            return back()->withInput();
        } catch (Exception $e) {
            flash()->option('position', 'top-center')->option('timeout', '')->error($e->getMessage());
            error_log('An error occured: ' . $e);
            return back()->withInput();
        }
    }
    //store provider's home info
    public function storeProviderHomeInfo(Request $req)
    { //validate home form input
        $validatedData = $req->validate([
            "home_name" => ['required', 'string'],
            "website" => ['nullable', 'string'],
            "work_email" => ['required', 'email'],
            "phone_number" => ['required'],
            "state" => ['required'],
            "city" => ['required', 'string'],
            "zipcode" => ['required'],
            "street" => ['required'],
            "home_description" => ['required', 'max:65535']
        ]);
        //get user
        $user = User::find(auth::id());
        //check if user is present
        if (!isset($user)) {
            flash()->options(['timeout' => '', 'position' => 'top-center'])->error("Please login first to complete this form");
            return back()->withInput();
        }

        if (!isset($user->provider)) {
            //save data to db
            $user->provider()->create($validatedData);
            flash()->success('success');
            return back()->withInput();
        } else {
            flash()->options(['timeout' => '', 'position' => 'top-center'])->error('You\'ve already provided your home information.');
            return back()->withInput();
        }
    }
    //register caregiver info
    public function storeCaregiver(Request $req)
    {
        //validate form input
        $validatedData = $req->validate([
            "first_name" => ['required', 'min:2', 'string'],
            "last_name" => ['required', 'min:2', 'string'],
            "email" => ['required', 'email'],
            "date_of_birth" => ['required', 'date'],
            "gender" => ['required', 'string'],
            "state" => ['required'],
            "city" => ['required'],
            'street' => ['required'],
            "zipcode" => ['required'],
            "phone_number" => ['required'],
            "terms" => ['required', 'accepted'],
            "password" => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
        ]);
        //get user info
        $user = User::where('email', $validatedData['email'])->first();
        //check if user is already registered
        if (isset($user)) {
            flash()->option('position', 'top-center')->option('timeout', '')->error("Email is already registered with us");
            return back()->withInput();
        }
        try {
            //save user to db
            $saveUser = $this->saveNewUser(
                $validatedData['first_name'],
                $validatedData['last_name'],
                $validatedData['email'],
                $validatedData['password']
            );
            //assign role
            $role = UserRoles::where('role', 'CAREGIVER')->first();
            $saveUser->roles()->attach($role->id);
            $savedData = UserCaregiver::create([
                'user_id' => $saveUser->id,
                'date_of_birth' => $validatedData['date_of_birth'],
                'gender' => $validatedData['gender'],
                'phone_number' => $validatedData['phone_number'],
                'state' => $validatedData['state'],
                'city' => $validatedData['city'],
                'zipcode' => $validatedData['zipcode'],
                'street' => $validatedData['street']
            ]);
        } catch (QueryException $e) {
            flash()->option('position', 'top-center')->option('timeout', '')->error('something went wrong while saving you data. Please try again');
            Log::error($e->getMessage());
            return back()->withInput();
        } catch (Exception $e) {
            flash()->option('position', 'top-center')->option('timeout', '')->error("something went wrong on our side. Please try again letter after we've resolved the issue");
            Log::error($e->getMessage());
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
