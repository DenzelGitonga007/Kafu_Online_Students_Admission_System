<?php

namespace App\Http\Controllers;

// Call the models, to retrieve the data
// PersonalDetail
use App\Models\PersonalDetail;
// SpouseDetail
use App\Models\SpouseDetail;
// ParentDetail
use App\Models\ParentDetail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;
// use App\Http\Controllers\IctCrudController;


class UserController extends Controller
{
    //The roles function from the routes
    public function roles() {
       $role = Auth::user()->role; //This fetches the role value from the users' table and uses it to authenticate. 
       
    //    The condition(s) for authentication
    
    if ($role == '1') {
        // For the ICT_Support(s_admin)
        // return view('crud.ict_crud.student_details');
        $personal_details = PersonalDetail::get();
        $spouse_details = SpouseDetail::get();
        $parent_details = ParentDetail::get();
        return view('crud.ict_crud.student_details', compact('personal_details', 'spouse_details', 'parent_details'));
    }

    elseif ($role == '2') {
        // For the registrar(admin)
        return view('crud.registrar_crud.student_list');
    }

    else{
        // For the student->0
        // return view('resources\views\crud\student_crud\personal_details\bio_data.blade.php');
        // function viewStudent($id) {
        //     // Get the records as from the index function
        //     $personal_details = PersonalDetail::where('id', '=', $id)->first();
        //     // return $personal_details;
        //     return view('crud.student_crud.view_personal_details', compact('personal_details'));
        // }
        // $personal_details = PersonalDetail::where('id', '=', $id)->first();
        return view('crud.student_crud.personal_details');
    }
    }
}
