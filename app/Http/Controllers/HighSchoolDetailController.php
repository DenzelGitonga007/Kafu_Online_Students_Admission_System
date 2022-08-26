<?php

namespace App\Http\Controllers;

use App\Models\HighSchoolDetail;
use Illuminate\Http\Request;

class HighSchoolDetailController extends Controller
{
    //View the highschool details form
    public function viewHighShoolDetailsForm() {
        return view('crud.student_crud.high_school_details');
    }
    
    //Uploading the High School details
    public function uploadHighSchoolDetails(Request $request) {
        $request->validate([
        // First High School-- this is a must
        'first_high_school_name'=>'required',
        'first_high_school_address'=>'required',
        'first_high_school_town'=>'required',
        'first_high_school_from_date'=>'required',
        'first_high_school_to_date'=>'required',
        ]);

        // Fetching the data from the input fields
        // First High School
        $first_high_school_name = $request->first_high_school_name;
        $first_high_school_address = $request->first_high_school_address;
        $first_high_school_town = $request->first_high_school_town;
        $first_high_school_from_date = $request->first_high_school_from_date;
        $first_high_school_to_date = $request->first_high_school_to_date;

        // Second High School
        $second_high_school_name = $request->second_high_school_name;
        $second_high_school_address = $request->second_high_school_address;
        $second_high_school_town = $request->second_high_school_town;
        $second_high_school_from_date = $request->second_high_school_from_date;
        $second_high_school_to_date = $request->second_high_school_to_date;

        // Thirs High School
        $third_high_school_name = $request->third_high_school_name;
        $third_high_school_address = $request->third_high_school_address;
        $third_high_school_town = $request->third_high_school_town;
        $third_high_school_from_date = $request->third_high_school_from_date;
        $third_high_school_to_date = $request->third_high_school_to_date;


        // Saving  into the database
        $high_school_details = new HighSchoolDetail(); //Using the model to create a new instance of data(detail)

        // First High School
        $high_school_details->first_high_school_name = $first_high_school_name;
        $high_school_details->first_high_school_address = $first_high_school_address;
        $high_school_details->first_high_school_town = $first_high_school_town;
        $high_school_details->first_high_school_from_date = $first_high_school_from_date;
        $high_school_details->first_high_school_to_date = $first_high_school_to_date;

        // Second High School
        $high_school_details->second_high_school_name = $second_high_school_name;
        $high_school_details->second_high_school_address = $second_high_school_address;
        $high_school_details->second_high_school_town = $second_high_school_town;
        $high_school_details->second_high_school_from_date = $second_high_school_from_date;
        $high_school_details->second_high_school_to_date = $second_high_school_to_date;

        // First High School
        $high_school_details->third_high_school_name = $third_high_school_name;
        $high_school_details->third_high_school_address = $third_high_school_address;
        $high_school_details->third_high_school_town = $third_high_school_town;
        $high_school_details->third_high_school_from_date = $third_high_school_from_date;
        $high_school_details->third_high_school_to_date = $third_high_school_to_date;

        // Saving the details
        $high_school_details->save();

        // Redirect
        return redirect()->to('other_institution_details')->with('success', "Your high school/secondary school details have been received successfully! Now fill the other institution and qualification form details below...");
    }
}
