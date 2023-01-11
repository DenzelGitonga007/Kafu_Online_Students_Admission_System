<?php

namespace App\Http\Controllers;

use App\Models\ParentDetail;
use Illuminate\Http\Request;

class ParentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Present the parent_details form
        return view('crud.student_crud.parent_details');
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
        // Store the data from parent_details.blade.php
        ParentDetail::create([
        'user_id'=>$request -> user()->id, // the relationship
             // Father
         'father'=>$request->input('father'),
         'father_surname'=> $request->input('father_surname'),
         'father_first_name' => $request->input('father_first_name'),
         'father_last_name' => $request->input('father_last_name'),
         'father_national_id' => $request->input('father_national_id'),
         'father_occupation' => $request->input('father_occupation'),
 
         // Mother
         'mother' => $request->input('mother'),
         'mother_surname' => $request->input('mother_surname'),
         'mother_first_name' => $request->input('mother_first_name'),
         'mother_last_name' => $request->input('mother_last_name'),
         'mother_national_id' => $request->input('mother_national_id'),
         'mother_occupation' => $request->input('mother_occupation'),
 
         // Guardian
         'guardian_surname' => $request->input('guardian_surname'),
         'guardian_first_name' => $request->input('guardian_first_name'),
         'guardian_initial_name' => $request->input('guardian_initial_name'),
         'guardian_national_id' => $request->input('guardian_national_id'),
         'guardian_email' => $request->input('guardian_email'),
         'guardian_phone' => $request->input('guardian_phone'),
         'guardian_city' => $request->input('guardian_city'),
         'guardian_pob' => $request->input('guardian_pob'),
         'guardian_occupation' => $request->input('guardian_occupation'),
        ]);

        // After saving the data into the db, proceed to the spouse details page with the success message
        return redirect(route('spouse_details.index'))
        ->with('success', "Your parent details have been received successfully! Now fill the spouse details...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParentDetail  $parentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ParentDetail $parentDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParentDetail  $parentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentDetail $parentDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentDetail  $parentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParentDetail $parentDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentDetail  $parentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentDetail $parentDetail)
    {
        //
    }
}
