<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Call the SpouseDetail model
use App\Models\SpouseDetail;

class SpouseDetailController extends Controller
{
    // View the spouse details form
    public function viewSpouseDetailsForm() {
        return view('crud.student_crud.spouse_details');
    }

    // Uploading the spouse details
    public function uploadSpouseDetails(Request $request) {
        // Validation
        $request -> validate([
            // // Spouse
            'marital_status'=>'required',
            // 'spouse_surname'=> '',
            // 'spouse_first_name'=> '',
            // 'spouse_last_name'=> '',
            // 'spouse_national_id'=>'',
            // 'spouse_email'=> '',
            // 'spouse_phone'=> '',
            // 'spouse_city'=> '',
            // 'spouse_pob'=> '',
            // 'spouse_occupation'=>'',
        ]);

        // Fetching the input data
         $marital_status = $request->marital_status;
         $spouse_surname = $request->spouse_surname;
         $spouse_first_name = $request->spouse_first_name;
         $spouse_last_name = $request->spouse_last_name;
         $spouse_national_id = $request->spouse_national_id;
        //  $spouse_nationality = $request->spouse_nationality;
         $spouse_email = $request->spouse_email;
         $spouse_phone = $request->spouse_phone;
         $spouse_city = $request->spouse_city;
         $spouse_pob = $request->spouse_pob;
         $spouse_occupation = $request->spouse_occupation;

        //  Saving the details into the db
        $spouse_details = new SpouseDetail();

        // The relationship
        $spouse_details->user_id = request()->user()->id;
        
        $spouse_details->marital_status = $marital_status;
        $spouse_details->spouse_surname = $spouse_surname;
        $spouse_details->spouse_first_name = $spouse_first_name;
        $spouse_details->spouse_last_name = $spouse_last_name;
        $spouse_details->spouse_national_id = $spouse_national_id;
        $spouse_details->spouse_email = $spouse_email;
        $spouse_details->spouse_phone = $spouse_phone;
        $spouse_details->spouse_city = $spouse_city;
        $spouse_details->spouse_pob = $spouse_pob;
        $spouse_details->spouse_occupation = $spouse_occupation;

        // Save
        $spouse_details->save();

        return redirect(route('next of kin details'))->with('success', "Your spouse details have been received successfully! Now fill out your next of kin details below...");
 
    }
}
