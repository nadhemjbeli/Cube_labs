<?php

namespace App\Http\Controllers;

use App\Business;
use App\Mail\WelcomeBusinessMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('details/business');
    }

    public function getBusinessForm()
    {
        return view('forms/business_form', ['user' => Auth::user()]);
    }

    public function postBusinessForm(Request $request)
    {
        $this->validate($request, [

            'phone_number' => 'required|min:8',
            'business_location_address' => 'required',
            'date_of_business' => 'required',
            'business_name' => 'required',
            'business_description' => 'required|max:500',
            'business_problem' => 'required|max:500',

        ]);

        $phone_number = $request['phone_number'];
        $business_location_address = $request['business_location_address'];
        $members_number = $request['members_number'];
        $date_of_business = $request['date_of_business'];
        $business_name = $request['business_name'];
        $business_description = $request['business_description'];
        $business_problem = $request['business_problem'];

        $business = new Business();
        $business->phone_number = $phone_number;
        $business->business_location_address = $business_location_address;
        $business->members_number = (int) $members_number;
        $business->date_of_business = $date_of_business;
        $business->business_name = $business_name;
        $business->business_description = $business_description;
        $business->business_problem = $business_problem;
        $message = 'There was an error';
        if ($request->user()->business()->save($business)) {
            Mail::to('cravecoding@gmail.com')->send(new WelcomeBusinessMail());
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        //
    }
}
