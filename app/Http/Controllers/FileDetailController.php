<?php

namespace App\Http\Controllers;

use App\Models\FileDetail;
use Illuminate\Http\Request;

class FileDetailController extends Controller
{
    //Viewing the form
    public function viewFileDetailsForm() {
        return view('crud.student_crud.files_details');
    }
    //Uploading the High School details
    public function uploadFileDetails(Request $request) {
        // Validation
        $request->validate([
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048',
            'medical'=>'required|mimes:pdf',
            'sporting'=>'required|mimes:pdf',
        ]);
 
        //  Fetching the data
        $photo = $request->file('photo')->store('images');
        $medical = $request->file('medical')->store('medical_reports');
        $sporting = $request->file('sporting')->store('sporting');

        // Saving the data
        $file_details = new FileDetail();
        $file_details->photo = $photo;
        $file_details->medical = $medical;
        $file_details->sporting = $sporting;

        // Save
        $file_details->save();
        
        return redirect()->to('student_details_report')->with('success', "Your details have been received successfully!");
    }
}
