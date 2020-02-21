<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function getSignin()
    {
        return view('user/login');
    }
    public function getDashboard()
    {
        return view('user/dashboard', ['user' => Auth::user()]);
    }
    public function getHome()
    {
        return view('welcome');
    }
    public function signupPage()
    {
        return view('user/signup');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('startup_space');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|unique:users',
            'first_name' => 'required|max:50',
            'password' => 'required|min:8',
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);
        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();
        Auth::login($user);
        return redirect()->route('startup_type');

    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'emailSignIn' => 'required',
            'passwordSignIn' => 'required',
        ]);

        if (Auth::attempt(['email' => $request['emailSignIn'], 'password' => $request['passwordSignIn']])) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
