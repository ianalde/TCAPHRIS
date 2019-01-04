<?php

namespace App\Http\Controllers;

use App\Dtr;
use App\Attendance;
use Illuminate\Http\Request;

class DtrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disabled = (Attendance::checkAttendanceStatus()) ? true : false;

        return view('dtr.index', compact('disabled'));
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
     * @param  \App\Dtr  $dtr
     * @return \Illuminate\Http\Response
     */
    public function show(Dtr $dtr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dtr  $dtr
     * @return \Illuminate\Http\Response
     */
    public function edit(Dtr $dtr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dtr  $dtr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dtr $dtr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dtr  $dtr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dtr $dtr)
    {
        //
    }
}