<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Startup;

use Illuminate\Http\Response;
use App\Notifications\notifyMe;
use Illuminate\Support\Facades\Notification;
use App\Business;

use App\Mail\WelcomeStartupMail;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function getMail()
    {
        return view('emails/welcome', ['user' => Auth::user()]);
    }
    public function mailMe(Request $request){
        if (Auth::attempt(['email' => $request['emailSignIn'], 'password' => $request['passwordSignIn']])) {
            Mail::to('cravecoding@gmail.com')->send(new WelcomeStartupMail());

            return view('emails/welcome', ['user' => Auth::user()]);

        }
    }
}
