<?php

namespace App\Http\Controllers;

use App\Models\NextOfKinDetail;
use Illuminate\Http\Request;

class NextOfKinDetailController extends Controller
{
    // Return the next of kin details form view
    public function viewNextofKinDetailsForm() {
        return view('crud.student_crud.next_of_kin_details');
    }

    // Uploading the next_of_kin_details
    public function uploadNextOfKinDetails(Request $request) {

        // Validation
        $request->validate([

        // Next of Kin
        'nxtk_surname'=> 'required',
        'nxtk_first_name'=> 'required',
        'nxtk_initial_name'=> 'required',
        'nxtk_national_id'=> 'required',
        'nxtk_email'=> 'required',
        'nxtk_phone'=> 'required',
        'nxtk_city'=> 'required',
        'nxtk_pob'=> 'required',

        ]);

        // Fetching the input data
        // Next of Kin 
        $nxtk_surname = $request->nxtk_surname;
        $nxtk_first_name = $request->nxtk_first_name;
        $nxtk_initial_name = $request->nxtk_initial_name;
        $nxtk_national_id = $request->nxtk_national_id;
        $nxtk_email = $request->nxtk_email;
        $nxtk_phone = $request->nxtk_phone;
        $nxtk_city = $request->nxtk_city;
        $nxtk_pob = $request->nxtk_pob;
    

        // Saving the data into the db
        $nxtk_details = new NextOfKinDetail();

        // The relationship
        $nxtk_details->user_id = request()->user()->id;

        // Next of Kin Details
        $nxtk_details->nxtk_surname = $nxtk_surname;
        $nxtk_details->nxtk_first_name = $nxtk_first_name;
        $nxtk_details->nxtk_initial_name = $nxtk_initial_name;
        $nxtk_details->nxtk_national_id = $nxtk_national_id;
        $nxtk_details->nxtk_email = $nxtk_email;
        $nxtk_details->nxtk_phone = $nxtk_phone;
        $nxtk_details->nxtk_city = $nxtk_city;
        $nxtk_details->nxtk_pob = $nxtk_pob;

        // Saving the data
        $nxtk_details->save();

        // Redirect to the emergency contact details
        return redirect(route('emergency contact details'))->with('success', "Your next of kin details have been received successfully! Now fill in your emergency contact details below...");
        
    }
}
