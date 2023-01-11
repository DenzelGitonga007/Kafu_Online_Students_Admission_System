<?php

namespace App\Http\Controllers;

use App\Models\EmergencyContactDetail;
use Illuminate\Http\Request;

class EmergencyContactDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Present the emergency contact details view
        return view('crud.student_crud.emergency_contact_details');
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
        // Store the emergency contact details
        EmergencyContactDetail::create([
            'user_id' => $request -> user()->id,
            'emerge_con_surname'=> $request -> input('emerge_con_surname'),
            'emerge_con_first_name'=> $request -> input('emerge_con_first_name'),
            'emerge_con_initial_name'=> $request -> input('emerge_con_initial_name'),
            'emerge_con_national_id'=> $request -> input('emerge_con_national_id'),
            'emerge_con_email'=> $request -> input('emerge_con_email'),
            'emerge_con_phone'=> $request -> input('emerge_con_phone'),
            'emerge_con_city'=> $request -> input('emerge_con_city'),
            'emerge_con_pob'=> $request -> input('emerge_con_pob'),
        ]);
        // Redirect
        return redirect(route('high_school_details.index'))
        ->with('success', "Your emergency contact details have been received successfully! Now fill in your high school/secondary school details below...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmergencyContactDetail  $emergencyContactDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EmergencyContactDetail $emergencyContactDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmergencyContactDetail  $emergencyContactDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EmergencyContactDetail $emergencyContactDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmergencyContactDetail  $emergencyContactDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmergencyContactDetail $emergencyContactDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmergencyContactDetail  $emergencyContactDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmergencyContactDetail $emergencyContactDetail)
    {
        //
    }
}
