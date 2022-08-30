<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call  the ParentDetail model
use App\Models\ParentDetail;

class ParentDetailController extends Controller
{
    // Viewing the parent details form
    public function viewParentDetailsForm() {
        return view('crud.student_crud.parent_details');
    }
    // Uploading the parent details
    public function uploadParentDetails(Request $request) {
        //Validation
        $request->validate([
            // Father
            'father'=>'required',
            // 'father_surname'=> '',
            // 'father_first_name'=> '',
            // 'father_last_name'=> '',
            // 'father_national_id'=> '',
            // 'father_occupation'=> '',

            // Mother
            'mother'=> 'required',
            // 'mother_surname'=> '',
            // 'mother_first_name'=> '',
            // 'mother_last_name'=> '',
            // 'mother_national_id'=> '',
            // 'mother_occupation'=> '',

            // The guardian fields are not required, so they're left out

        ]);
        // Fetching the input data

        // Father
        $father = $request->father;
        $father_surname = $request->father_surname;
        $father_first_name = $request->father_first_name;
        $father_last_name = $request->father_last_name;
        $father_national_id = $request->father_national_id;
        $father_occupation = $request->father_occupation;

        // Mother
        $mother = $request->mother;
        $mother_surname = $request->mother_surname;
        $mother_first_name = $request->mother_first_name;
        $mother_last_name = $request->mother_last_name;
        $mother_national_id = $request->mother_national_id;
        $mother_occupation = $request->mother_occupation;

        // Guardian
        $guardian_surname = $request->guardian_surname;
        $guardian_first_name = $request->guardian_first_name;
        $guardian_initial_name = $request->guardian_initial_name;
        $guardian_national_id = $request->guardian_national_id;
        $guardian_email = $request->guardian_email;
        $guardian_phone = $request->guardian_phone;
        $guardian_city = $request->guardian_city;
        $guardian_pob = $request->guardian_pob;
        $guardian_occupation = $request->guardian_occupation;



        // Saving the data into the db
        $parent_details = new ParentDetail();

        // The relationship
        $parent_details->user_id = request()->user()->id;

        // Father
        $parent_details->father = $father;
        $parent_details->father_surname = $father_surname;
        $parent_details->father_first_name = $father_first_name;
        $parent_details->father_last_name = $father_last_name;
        $parent_details->father_national_id = $father_national_id;
        $parent_details->father_occupation = $father_occupation;

        // Father
        $parent_details->mother = $mother;
        $parent_details->mother_surname = $mother_surname;
        $parent_details->mother_first_name = $mother_first_name;
        $parent_details->mother_last_name = $mother_last_name;
        $parent_details->mother_national_id = $mother_national_id;
        $parent_details->mother_occupation = $mother_occupation;

        // Guardian
        $parent_details->guardian_surname = $guardian_surname;
        $parent_details->guardian_first_name = $guardian_first_name;
        $parent_details->guardian_initial_name = $guardian_initial_name;
        $parent_details->guardian_national_id = $guardian_national_id;
        $parent_details->guardian_email = $guardian_email;
        $parent_details->guardian_phone = $guardian_phone;
        $parent_details->guardian_city = $guardian_city;
        $parent_details->guardian_pob = $guardian_pob;
        $parent_details->guardian_occupation = $guardian_occupation;

        // Saving the data
        $parent_details->save();

        // After saving the data into the db, proceed to the spouse details page with the success message
        return redirect(route('spouse details'))->with('success', "Your parent details have been received successfully! Now fill the spouse details...");




    }
}
