<?php

use App\Http\Controllers\ClubAndSocietyController;
use App\Http\Controllers\EmergencyDetailController;
use App\Http\Controllers\FileDetailController;
use App\Http\Controllers\GameAndSportDetailController;
use App\Http\Controllers\HighSchoolDetailController;
use Illuminate\Support\Facades\Route;
// Call the controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\IctCrudController;
use App\Http\Controllers\NextOfKinDetailController;
use App\Http\Controllers\OtherDetailController;
use App\Http\Controllers\OtherInstitutionDetailController;
use App\Http\Controllers\ParentDetailController;
use App\Http\Controllers\SpouseDetailController;
use App\Http\Controllers\StudentDetailReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// The redirects route, with the roles function
Route::get('/redirects', [UserController::class, "roles"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    // To prevent login from the url using /dashboard
    Route::get('/dashboard', [UserController::class, "roles"])->name('dashboard');

    //To prevent login from the url using /redirects
    Route::get('/redirects', [UserController::class, "roles"])->name('dashboard');

    // To prevent going to the spouse details from the url
    // Route::get('/spouse_details', [UserController::class, "roles"])->name('dashboard');
    
});

// The crud routes

// Student Crud

// Personal Details
// Uploading the personal details into the db
Route::post('/student_upload_personal_details', [PersonalDetailController::class, "uploadPersonalDetails"]);

// The parent details form
// Viewing the form
Route::get('parent_details', [ParentDetailController::class, "viewParentDetailsForm"]);
// Uploading the parent details
Route::post('student_upload_parent_details', [ParentDetailController::class, "uploadParentDetails"]);

//Spouse details form
// Viewing the form
Route::get('spouse_details', [SpouseDetailController::class, "viewSpouseDetailsForm"]);
// Uploading the spouse details
Route::post('student_upload_spouse_details', [SpouseDetailController::class, "uploadSpouseDetails"]);


// Next of kin details form
// Viewing the form
Route::get('next_of_kin_details', [NextOfKinDetailController::class, "viewNextOfKinDetailsForm"]);
// Uploading the next of kin details
Route::post('student_upload_next_of_kin_details', [NextOfKinDetailController::class, "uploadNextOfKinDetails"]);


// The emergency details form
// Viewing the form
Route::get('emergency_contact_details', [EmergencyDetailController::class, "viewEmergencyContactDetailsForm"]);
// Uploading the emergency contact details
Route::post('student_upload_emergency_contact_details', [EmergencyDetailController::class, "uploadEmergencyContactDetails"]);


// The highschool details
// Viewing the form
Route::get('high_school_details', [HighSchoolDetailController::class, "viewHighShoolDetailsForm"]);
// Uploading the high school details
Route::post('student_upload_high_school_details', [HighSchoolDetailController::class, "uploadHighSchoolDetails"]);


// The other institution details
// Viewing the form
Route::get('other_institution_details', [OtherInstitutionDetailController::class, "viewOtherInstitutionDetailsForm"]);
// Uploading the high school details
Route::post('student_upload_other_institution_details', [OtherInstitutionDetailController::class, "uploadOtherInstitutionDetails"]);


// The games and sport details
// Viewing the form
Route::get('games_and_sports_details', [GameAndSportDetailController::class, "viewGameAndSportDetailsForm"]);
// Uploading the games and sports details
Route::post('student_upload_games_and_sports_details', [GameAndSportDetailController::class, "uploadGameAndSportDetails"]);

// The clubs and societies
// Viewing the form
Route::get('clubs_and_societies_details', [ClubAndSocietyController::class, "viewClubAndSocietyDetailsForm"]);
// Uploading the games and sports details
Route::post('student_upload_clubs_and_societies_details', [ClubAndSocietyController::class, "uploadClubAndSocietiesDetails"]);

// The Other Details Form
//Viewing the form
Route::get('other_details', [OtherDetailController::class, "viewOtherDetailsForm"]);
// Uploading the games and sports details
Route::post('student_upload_other_details', [OtherDetailController::class, "uploadOtherDetails"]);

// The Files Details Form
//Viewing the form
Route::get('files_details', [FileDetailController::class, "viewFileDetailsForm"]);
// Uploading the games and sports details
Route::post('student_upload_files_details', [FileDetailController::class, "uploadFileDetails"]);

Route::get('student_details_report', [StudentDetailReportController::class, "viewStudentDetailsReport"]);





//Ict crud
// Reading/viewing the personal details
Route::get('/student_details', [IctCrudController::class, "index"]);
// Reading/viewing each student individually
Route::get('/view_student/{id}', [IctCrudController::class, "viewStudent"]);

// Return the add_students_form
Route::get('/add_student', [IctCrudController::class, "addStudent"]);

// The add_students_form form-handler
Route::post('ict_save_details', [IctCrudController::class, "saveStudent"]);

// Editing/updating the student details
Route::get('edit_student/{id}', [IctCrudController::class, "editStudent"]);

// Saving the updates
Route::post('ict_update_details', [IctCrudController::class, "updateDetails"]);

// Deleting
Route::get('delete_student/{id}', [IctCrudController::class, "deleteStudent"]);





    