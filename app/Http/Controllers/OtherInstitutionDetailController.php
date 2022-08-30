<?php

namespace App\Http\Controllers;

use App\Models\OtherInstitutionDetail;
use Illuminate\Http\Request;

class OtherInstitutionDetailController extends Controller
{
    //View the highschool details form
    public function viewOtherInstitutionDetailsForm() {
        return view('crud.student_crud.other_institution_details');
    }

    //Uploading the High School details
    public function uploadOtherInstitutionDetails(Request $request) {
        // No validation required as fields can be null
        // Fetching the data from the input fields

        // First Institution
        $first_institution_name = $request->first_institution_name;
        $first_institution_specialization = $request->first_institution_specialization;
        $first_institution_qualification = $request->first_institution_qualification;

        // Second Institution
        $second_institution_name = $request->second_institution_name;
        $second_institution_specialization = $request->second_institution_specialization;
        $second_institution_qualification = $request->second_institution_qualification;

        // Third Institution
        $third_institution_name = $request->third_institution_name;
        $third_institution_specialization = $request->third_institution_specialization;
        $third_institution_qualification = $request->third_institution_qualification;

        // Saving  into the database
        $other_institution_details = new OtherInstitutionDetail(); //Using the model to create a new instance of data(detail)

        // The relationship
        $other_institution_details->user_id = request()->user()->id;

        // First Institution
        $other_institution_details->first_institution_name = $first_institution_name;
        $other_institution_details->first_institution_specialization = $first_institution_specialization;
        $other_institution_details->first_institution_qualification = $first_institution_qualification;
       
        // Second Institution
        $other_institution_details->second_institution_name = $second_institution_name;
        $other_institution_details->second_institution_specialization = $second_institution_specialization;
        $other_institution_details->second_institution_qualification = $second_institution_qualification;
       
        // Third Institution
        $other_institution_details->third_institution_name = $third_institution_name;
        $other_institution_details->third_institution_specialization = $third_institution_specialization;
        $other_institution_details->third_institution_qualification = $third_institution_qualification;
       
        // Saving the details
        $other_institution_details->save();

        // Redirect
        return redirect(route('games and sports details'))->with('success', "Your other institution details and qualification details have been received successfully! Now fill in your games and sports form details below...");
    }
}
