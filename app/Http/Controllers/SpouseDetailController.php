<?php

namespace App\Http\Controllers;

use App\Models\SpouseDetail;
use Illuminate\Http\Request;

class SpouseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Present the spouse details view
        return view('crud.student_crud.spouse_details');
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
        // Store the data from spouse details form
        SpouseDetail::create([
            'user_id'=> $request -> user()->id,
            'marital_status'=> $request -> input('marital_status'),
            'spouse_surname'=> $request -> input('spouse_surname'),
            'spouse_first_name'=> $request -> input('spouse_first_name'),
            'spouse_last_name'=> $request -> input('spouse_last_name'),
            'spouse_national_id'=> $request -> input('spouse_national_id'),
            'spouse_email'=> $request -> input('spouse_email'),
            'spouse_phone'=> $request -> input('spouse_phone'),
            'spouse_city'=> $request -> input('spouse_city'),
            'spouse_pob'=> $request -> input('spouse_pob'),
            'spouse_occupation'=> $request -> input('spouse_occupation'),
        ]);
        // Redirect
        return redirect(route('next of kin details'))
        ->with('success', "Your spouse details have been received successfully! Now fill out your next of kin details below...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpouseDetail  $spouseDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SpouseDetail $spouseDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpouseDetail  $spouseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SpouseDetail $spouseDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpouseDetail  $spouseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpouseDetail $spouseDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpouseDetail  $spouseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpouseDetail $spouseDetail)
    {
        //
    }
}
