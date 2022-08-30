<?php

namespace App\Http\Controllers;

use App\Models\EmergencyContactDetail;

use Illuminate\Http\Request;

class EmergencyDetailController extends Controller
{
    //Viewing the emergency contact details form
    public function viewEmergencyContactDetailsForm() {
        return view('crud.student_crud.emergency_contact_details');
    }
    // Uploading the emergency_contact_details
    public function uploadEmergencyContactDetails(Request $request) {
        // Validation
        $request->validate([
        // Emergency contact
        'emerge_con_surname'=> 'required',
        'emerge_con_first_name'=> 'required',
        'emerge_con_initial_name'=> 'required',
        'emerge_con_national_id'=> 'required',
        'emerge_con_email'=> 'required',
        'emerge_con_phone'=> 'required',
        'emerge_con_city'=> 'required',
        'emerge_con_pob'=> 'required',
        ]);

        // Fetching the input data
        // Emergency Contact
        $emerge_con_surname = $request->emerge_con_surname;
        $emerge_con_first_name = $request->emerge_con_first_name;
        $emerge_con_initial_name = $request->emerge_con_initial_name;
        $emerge_con_national_id = $request->emerge_con_national_id;
        $emerge_con_email = $request->emerge_con_email;
        $emerge_con_phone = $request->emerge_con_phone;
        $emerge_con_city = $request->emerge_con_city;
        $emerge_con_pob = $request->emerge_con_pob;
        
        // Saving the data into the db
        $emerge_con_details = new EmergencyContactDetail();

        $emerge_con_details->user_id = request()->user()->id;

        // Emergency Contact
        $emerge_con_details->emerge_con_surname = $emerge_con_surname;
        $emerge_con_details->emerge_con_first_name = $emerge_con_first_name;
        $emerge_con_details->emerge_con_initial_name = $emerge_con_initial_name;
        $emerge_con_details->emerge_con_national_id = $emerge_con_national_id;
        $emerge_con_details->emerge_con_email = $emerge_con_email;
        $emerge_con_details->emerge_con_phone = $emerge_con_phone;
        $emerge_con_details->emerge_con_city = $emerge_con_city;
        $emerge_con_details->emerge_con_pob = $emerge_con_pob;
        
        // Saving the data
        $emerge_con_details->save();

        // Redirect
        return redirect(route('high-school-details'))->with('success', "Your emergency contact details have been received successfully! Now fill in your high school/secondary school details below...");
    }
}
