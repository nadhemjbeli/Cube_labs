<?php

namespace App\Http\Controllers;

use App\Mail\adminMail;
use App\Mail\WelcomeStartupMail;
use App\Startup;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Notifications\notifyMe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('details/startup');
    }

    public function getaccepted()
    {
        return view('forms/accepted');
    }

    public function getrejected()
    {
        return view('forms/rejected');
    }

    public function getStartupForm()
    {
        return view('forms/startup_form', ['user' => Auth::user()]);
    }

    public function getStartupType()
    {
        return view('includes/startup_type');
    }

    public function getStartupSpace()
    {
        return view('details/startup_space');
    }

    public function getproperties()
    {
        return view('details/properties');
    }

    public function getForm(Request $request)
    {
        $this->validate($request, [
            'already' => 'required|in : 1, 0',
            'scalable' => 'required|in : 1, 0',
            'innovative' => 'required|in : 1, 0',
        ]);

        $already = $request['already'];
        $scalable = $request['scalable'];
        $rich = $request['rich'];
        $innovative = $request['innovative'];
        if (($already === '1' || $innovative == '1') && $scalable === '1') {
            return redirect()->route('accepted');
        }
        return redirect()->route('rejected');

    }

    public function postStartupForm(Request $request)
    {

        $this->validate($request, [
            'phone_number' => 'required|min:8',
            'location_address' => 'required',
            'startup_idea' => 'required',
            'startup_description' => 'required|max:500',
            'startup_problem' => 'required|max:500',

        ]);

        $phone_number = $request['phone_number'];
        $location_address = $request['location_address'];
        $startup_idea = $request['startup_idea'];
        $members_number = $request['members_number'];
        $startup_description = $request['startup_description'];
        $startup_problem = $request['startup_problem'];

        $startup = new Startup();

        $startup->phone_number = $phone_number;
        $startup->members_number = (int) $members_number;
        $startup->location_address = $location_address;
        $startup->startup_idea = $startup_idea;
        $startup->startup_description = $startup_description;
        $startup->startup_problem = $startup_problem;
        $message = 'There was an error';
        if ($request->user()->startup()->save($startup)) {
            Mail::to(Auth()->user()->email)->send(new WelcomeStartupMail());
            Mail::to('cravecoding@gmail.com')->send(new adminMail());
            $message = 'Post successfully created!';
        }

        return redirect()->route('dashboard')->with(['message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stored(Request $request)
    {
        $this->validate($request, [
            'already' => 'required|in : "yes","no"',
            'scalable' => 'required|in : "yes","no"',
            'innovative' => 'required_if:already,"no"|in : "yes","no"',
        ]);
        $already = $request['already'];
        $scalable = $request['scalable'];
        $rich = $request['rich'];
        $innovative = $request['innovative'];
        if (($already == "yes" || $innovative == "yes") && $scalable == "yes") {
            return redirect()->route('accepted');
        } else {
            return redirect()->route('rejected');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $startup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Startup $startup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        //
    }
}
