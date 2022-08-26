<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call the model
use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Redirect;

class IctCrudController extends Controller
{
    //Fetch all the records from the personal_details table
    public function index() {
        $personal_details = PersonalDetail::get();
        // return $personal_details;
        return view('crud.ict_crud.student_details', compact('personal_details'));

    }

    // Reading/viewing each student individually
    public function viewStudent($id) {
       $personal_details = PersonalDetail::where('id', '=', $id)->first();
       return view('crud.ict_crud.ict_view_student', compact('personal_details'));
    }

    // Returning the view with the "add student form"
    public function addStudent () {
       return view('crud.ict_crud.ict_add_student');
    }

    // Saving the student details from the add_students_form
    public function saveStudent (Request $request) {

    // Validation
    $request->validate([
        'surname' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'date'=>'required',
        'gender'=>'required',
        'national_id'=> 'required',
        'nationality'=> 'required',
        'email' => 'required',
        'phone'=> 'required',
        'city'=> 'required',
        'pob'=> 'required',
        'marital_status'=> 'required',
        'spouse_surname'=> '',
        'spouse_first_name'=> '',
        'spouse_last_name'=> '',
        'spouse_email'=> '',
        'spouse_phone'=> '',
        'spouse_city'=> '',
        'spouse_pob'=> '',
        'father'=>'required',
        'father_surname'=> '',
        'father_first_name'=> '',
        'father_last_name'=> '',
        'father_date'=> '',
        'father_occupation'=> '',
        'mother'=>'required',
        'mother_surname'=> '',
        'mother_first_name'=> '',
        'mother_last_name'=> '',
        'mother_date'=> '',
        'mother_occupation'=> '',
    ]);

    // Handling the input data (Request)
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
    $marital_status = $request->marital_status;
    $spouse_surname = $request->spouse_surname;
    $spouse_first_name = $request->spouse_first_name;
    $spouse_last_name = $request->spouse_last_name;
    $spouse_email = $request->spouse_email;
    $spouse_phone = $request->spouse_phone;
    $spouse_city = $request->spouse_city;
    $spouse_pob = $request->spouse_pob;
    $father = $request->father;
    $father_surname = $request->father_surname;
    $father_first_name = $request->father_first_name;
    $father_last_name = $request->father_last_name;
    $father_date = $request->father_date;
    $father_occupation = $request->father_occupation;
    $mother = $request->mother;
    $mother_surname = $request->mother_surname;
    $mother_first_name = $request->mother_first_name;
    $mother_last_name = $request->mother_last_name;
    $mother_date = $request->mother_date;
    $mother_occupation = $request->mother_occupation;


    $personal_details = new PersonalDetail();

    // Saving the data
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
    $personal_details->marital_status = $marital_status;
    $personal_details->spouse_surname = $spouse_surname;
    $personal_details->spouse_first_name = $spouse_first_name;
    $personal_details->spouse_last_name = $spouse_last_name;
    $personal_details->spouse_email = $spouse_email;
    $personal_details->spouse_phone = $spouse_phone;
    $personal_details->spouse_city = $spouse_city;
    $personal_details->spouse_pob = $spouse_pob;
    $personal_details->father = $father;
    $personal_details->father_surname = $father_surname;
    $personal_details->father_first_name = $father_first_name;
    $personal_details->father_last_name = $father_last_name;
    $personal_details->father_date = $father_date;
    $personal_details->father_occupation = $father_occupation;
    $personal_details->mother = $mother;
    $personal_details->mother_surname = $mother_surname;
    $personal_details->mother_first_name = $mother_first_name;
    $personal_details->mother_last_name = $mother_last_name;
    $personal_details->mother_date = $mother_date;
    $personal_details->mother_occupation = $mother_occupation;

    $personal_details->save();

    // Redirect
    return redirect()->back()->with('success', 'Student details uploaded successfully'); //Redirects to the index addStudent() {}
    }

    // Editing/updating a student
    public function editStudent($id) {
        // Get the records as from the index function
        $personal_details = PersonalDetail::where('id', '=', $id)->first();
        // return $personal_details;
        return view('crud.ict_crud.ict_edit_student', compact('personal_details'));
    }

    // Saving the updates
    public function updateDetails(Request $request) {
        // Validation
        $request->validate([
            'surname' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'date' => 'required',
            'gender'=>'required',
            'national_id'=> 'required',
            'nationality'=> 'required',
            'religion'=> 'required',
            'email' => 'required',
            'phone' => 'required',
            'city'=> 'required',
            'pob'=> 'required',
            'marital_status'=> 'required',
            'spouse_surname'=> '',
            'spouse_first_name'=> '',
            'spouse_last_name'=> '',
            'spouse_email'=> '',
            'spouse_phone'=> '',
            'spouse_city'=> '',
            'spouse_pob'=> '',
            'father'=>'required',
            'father_surname'=> '',
            'father_first_name'=> '',
            'father_last_name'=> '',
            'father_date'=> '',
            'father_occupation'=> '',
            'mother'=>'required',
            'mother_surname'=> '',
            'mother_first_name'=> '',
            'mother_last_name'=> '',
            'mother_date'=> '',
            'mother_occupation'=> '',
        ]);

        // The data fields
        $id = $request->id;
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
        $marital_status = $request->marital_status;
        $spouse_surname = $request->spouse_surname;
        $spouse_first_name = $request->spouse_first_name;
        $spouse_last_name = $request->spouse_last_name;
        $spouse_email = $request->spouse_email;
        $spouse_phone = $request->spouse_phone;
        $spouse_city = $request->spouse_city;
        $spouse_pob = $request->spouse_pob;
        $father = $request->father;
        $father_surname = $request->father_surname;
        $father_first_name = $request->father_first_name;
        $father_last_name = $request->father_last_name;
        $father_date = $request->father_date;
        $father_occupation = $request->father_occupation;
        $mother = $request->mother;
        $mother_surname = $request->mother_surname;
        $mother_first_name = $request->mother_first_name;
        $mother_last_name = $request->mother_last_name;
        $mother_date = $request->mother_date;
        $mother_occupation = $request->mother_occupation;



        PersonalDetail::where('id', '=', $id)->update([
        'surname' => $surname,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'date' => $date,
        'gender'=> $gender,
        'national_id'=> $national_id,
        'nationality'=> $nationality,
        'religion'=> $religion,
        'email'=> $email,
        'phone'=> $phone,
        'city'=> $city,
        'pob'=> $pob,
        'marital_status'=> $marital_status,
        'spouse_surname'=> $spouse_surname,
        'spouse_first_name'=> $spouse_first_name,
        'spouse_last_name'=> $spouse_last_name,
        'spouse_email'=> $spouse_email,
        'spouse_phone'=> $spouse_phone,
        'spouse_city'=> $spouse_city,
        'spouse_pob'=> $spouse_pob,
        'father'=> $father,
        'father_surname'=> $father_surname,
        'father_first_name'=> $father_first_name,
        'father_last_name'=> $father_last_name,
        'father_date'=> $father_date,
        'father_occupation'=> $father_occupation,
        'mother'=> $mother,
        'mother_surname'=> $mother_surname,
        'mother_first_name'=> $mother_first_name,
        'mother_last_name'=> $mother_last_name,
        'mother_date'=> $mother_date,
        'mother_occupation'=> $mother_occupation,

        ]);

        // Redirect
        return redirect()->back()->with('success', 'Details updated successfully');
    }

    // Deleting
    public function deleteStudent($id) {
        PersonalDetail::where('id', '=', $id)->delete();

        // Redirect
        return redirect()->back()->with('success', "Student deleted successfully!");
    }

}
