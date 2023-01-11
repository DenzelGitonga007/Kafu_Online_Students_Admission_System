<?php

namespace App\Http\Controllers;

use App\Models\HighSchoolDetail;
use Illuminate\Http\Request;

class HighSchoolDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Prezent the highschool details view
        return view('crud.student_crud.high_school_details');
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
        // Store the data from the high school view
        HighSchoolDetail::create([
            'user_id' => $request -> user()->id,
            // First highschool
            'first_high_school_name'=>$request -> input('first_high_school_name'),
            'first_high_school_address'=>$request -> input('first_high_school_address'),
            'first_high_school_town'=>$request -> input('first_high_school_town'),
            'first_high_school_from_date'=>$request -> input('first_high_school_from_date'),
            'first_high_school_to_date'=>$request -> input('first_high_school_to_date'),
            // Second high school
            'second_high_school_name' => $request->input('second_high_school_name'),
            'second_high_school_address' => $request->input('second_high_school_address'),
            'second_high_school_town' => $request->input('second_high_school_town'),
            'second_high_school_from_date' => $request->input('second_high_school_from_date'),
            'second_high_school_to_date' => $request->input('second_high_school_to_date'),
            // Third High School
            'third_high_school_address' => $request->input('third_high_school_address'),
            'third_high_school_town' => $request->input('third_high_school_town'),
            'third_high_school_name' => $request->input('third_high_school_name'),
            'third_high_school_from_date' => $request->input('third_high_school_from_date'),
            'third_high_school_to_date' => $request->input('third_high_school_to_date'),
        ]);
        // Redirect
        return redirect(route('other-institution-details'))
        ->with('success', "Your high school/secondary school details have been received successfully! Now fill the other institution and qualification form details below...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HighSchoolDetailController  $highSchoolDetailController
     * @return \Illuminate\Http\Response
     */
    public function show(HighSchoolDetailController $highSchoolDetailController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HighSchoolDetailController  $highSchoolDetailController
     * @return \Illuminate\Http\Response
     */
    public function edit(HighSchoolDetailController $highSchoolDetailController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HighSchoolDetailController  $highSchoolDetailController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HighSchoolDetailController $highSchoolDetailController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HighSchoolDetailController  $highSchoolDetailController
     * @return \Illuminate\Http\Response
     */
    public function destroy(HighSchoolDetailController $highSchoolDetailController)
    {
        //
    }
}
