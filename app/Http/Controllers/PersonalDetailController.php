<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// Call the model
use App\Models\PersonalDetail;

class PersonalDetailController extends Controller
{
    //Uploading the personal details
    public function uploadPersonalDetails(Request $request) {
        // Validation
        $request->validate([
            
            'surname'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'date'=> 'required',
            'gender'=> 'required',
            'national_id'=> 'required',
            'nationality'=> 'required',
            'religion'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'city'=> 'required',
            'pob'=> 'required',

        ]);

        // Fetching the input data (Request)
        // $user_id = $request->get("user_id");
        $surname = $request->surname;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $date = $request->date;
        $gender = $request->gender;
        $national_id = $request->national_id;
        $nationality = $request->nationality;
        $religion = $request->religion;
        $email = $request->email;
        $phone = $request->phone;
        $city = $request->city;
        $pob = $request->pob;


       
        // // Father
        // $father = $request->father;
        // $father_surname = $request->father_surname;
        // $father_first_name = $request->father_first_name;
        // $father_last_name = $request->father_last_name;
        // $father_date = $request->father_date;
        // $father_occupation = $request->father_occupation;

        // // Mother
        // $mother = $request->mother;
        // $mother_surname = $request->mother_surname;
        // $mother_first_name = $request->mother_first_name;
        // $mother_last_name = $request->mother_last_name;
        // $mother_date = $request->mother_date;
        // $mother_occupation = $request->mother_occupation;

        // Saving  into the database
        $personal_details = new PersonalDetail(); //Upload a new record through the model
        
        // The relationship
        $personal_details->user_id = request()->user()->id;


        $personal_details->surname = $surname;
        $personal_details->first_name = $first_name;
        $personal_details->last_name = $last_name;
        $personal_details->date = $date;
        $personal_details->gender = $gender;
        $personal_details->national_id = $national_id;
        $personal_details->nationality = $nationality;
        $personal_details->religion = $religion;
        $personal_details->email = $email;
        $personal_details->phone = $phone;
        $personal_details->city = $city;
        $personal_details->pob = $pob;

        $personal_details->save();

        // After saving the data into the db, proceed to the parent details page with the success message
        // return redirect()->to('parent_details')->with('success', "Your personal details have been received successfully! Now fill the parent details...");

        return redirect(route('parent details'))->with('success', "Your personal details have been received successfully! Now fill the parent details...");
    }

    // // Viewing the personal details
    // public function viewDetails($id) {
    //     // $personal_details = PersonalDetail::where('id', '=', $id)->first();
    //     // return $personal_details;
    //     $personal_details = PersonalDetail::where('id', '=', $id);
    //     return view('crud.student_crud.view_personal_details', compact('personal_details'));
    // }
}
