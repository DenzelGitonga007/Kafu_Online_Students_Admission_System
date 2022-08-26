<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDetailReportController extends Controller
{
    //View the success message
    public function viewStudentDetailsReport() {
        return view('crud.student_crud.student_details_report');
    }
}
