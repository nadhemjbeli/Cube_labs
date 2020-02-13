<?php

namespace App\Http\Controllers;

use App\Startup;
use Illuminate\Http\Request;

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
        return view('forms/startup_form');
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
            'already' => 'required|in : 1,0',
            'scalable' => 'required|in : 1,0',
            'innovative' => 'required|in : 1,0',
        ]);
        $already = $request['already'];
        $scalable = $request['scalable'];
        $rich = $request['rich'];
        $innovative = $request['innovative'];
        if (($already == 1 || $innovative == 1) && $scalable == 1) {
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
