<?php

namespace App\Http\Controllers;

use App\Models\OtherDetail;
use Illuminate\Http\Request;

class OtherDetailController extends Controller
{
    //View the highschool details form
    public function viewOtherDetailsForm() {
        return view('crud.student_crud.other_details');
    }

    public function uploadOtherDetails(Request $request) {
        // Validation
        $request->validate([
            'physical_impairment'=>'required',
        ]);

        // Fetching the data
        $physical_impairment= $request->physical_impairment;
        $physical_impairment_details = $request->physical_impairment_details;
        $other_information = $request->other_information;

        // Saving the data into the db
        $other_details = new OtherDetail();

        $other_details->physical_impairment = $physical_impairment;
        $other_details->physical_impairment_details = $physical_impairment_details;
        $other_details->other_information = $other_information;

        // Save
        $other_details->save();
        return redirect()->to('files_details')->with('success', "Your other information details have been received successfully!Now upload your files in the form below...");
    }

}
