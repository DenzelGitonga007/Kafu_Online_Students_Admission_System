<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Store the data from personal_details.blade.php
        PersonalDetail::create([
            // The input fields
            'user_id'=>$request -> user()->id, // the relationship
            'surname'=>$request -> input('surname'),
            'first_name'=>$request -> input('first_name'),
            'last_name'=>$request -> input('last_name'),
            'date'=> $request -> input('date'),
            'gender'=> $request -> input('gender'),
            'national_id'=> $request -> input('national_id'),
            'nationality'=> $request -> input('nationality'),
            'religion'=> $request -> input('religion'),
            'email'=> $request -> input('email'),
            'phone'=> $request -> input('phone'),
            'city'=> $request -> input('city'),
            'pob'=> $request -> input('pob'),
        ]);

        // Redirect
        return redirect(route('parent details'))
        ->with('success', "Your personal details have been received successfully! Now fill the parent details...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalDetail $personalDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalDetail $personalDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalDetail $personalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetail $personalDetail)
    {
        //
    }
}
