<?php

namespace App\Http\Controllers;

use App\Models\NextOfKinDetail;
use Illuminate\Http\Request;

class NextOfKinDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Present the next of kin details view
        return view('crud.student_crud.next_of_kin_details');
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
        // Store the data from the next of kin form
        NextOfKinDetail::create([
        'user_id' => $request -> user()->id,
        'nxtk_surname'=> $request -> input('nxtk_surname'),
        'nxtk_first_name'=> $request -> input('nxtk_first_name'),
        'nxtk_initial_name'=> $request -> input('nxtk_initial_name'),
        'nxtk_national_id'=> $request -> input('nxtk_national_id'),
        'nxtk_email'=> $request -> input('nxtk_email'),
        'nxtk_phone'=> $request -> input('nxtk_phone'),
        'nxtk_city'=> $request -> input('nxtk_city'),
        'nxtk_pob'=> $request -> input('nxtk_pob'),
        ]);
        return redirect(route('emergency contact details'))
        ->with('success', "Your next of kin details have been received successfully! Now fill in your emergency contact details below...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NextOfKinDetail  $nextOfKinDetail
     * @return \Illuminate\Http\Response
     */
    public function show(NextOfKinDetail $nextOfKinDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NextOfKinDetail  $nextOfKinDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(NextOfKinDetail $nextOfKinDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NextOfKinDetail  $nextOfKinDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NextOfKinDetail $nextOfKinDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NextOfKinDetail  $nextOfKinDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(NextOfKinDetail $nextOfKinDetail)
    {
        //
    }
}
