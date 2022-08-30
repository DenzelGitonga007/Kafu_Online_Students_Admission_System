<?php

namespace App\Http\Controllers;

use App\Models\ClubAndSocietyDetail;
use Illuminate\Http\Request;

class ClubAndSocietyController extends Controller
{
    //View the highschool details form
    public function viewClubAndSocietyDetailsForm() {
        return view('crud.student_crud.clubs_and_societies_details');
    }

    //Uploading the High School details
    public function uploadClubAndSocietiesDetails(Request $request) {
        // Validation
        $request->validate([
            'first_club'=>'required',
        ]);

        // Fetching the data
        $first_club = $request->first_club;
        $second_club = $request->second_club;
        $third_club = $request->third_club;

        // Saving the data into the db
        $clubs_and_societies_details =new ClubAndSocietyDetail();

        // The relationship
        $clubs_and_societies_details->user_id = request()->user()->id;

        $clubs_and_societies_details->first_club = $first_club;
        $clubs_and_societies_details->second_club = $second_club;
        $clubs_and_societies_details->third_club = $third_club;

        // Save
        $clubs_and_societies_details->save();
        return redirect(route('other details'))->with('success', "Your clubs and societies details have been received successfully! Now fill in any other details in the form below...");

    }
}
