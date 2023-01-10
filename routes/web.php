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

Route::prefix('/student')->group(function () {

// Presenting the forms and uploading the data

// Personal details
Route::resource('personal_details', PersonalDetailController::class);

// The parent details form
Route::resource('/parent_details', ParentDetailController::class);

//Spouse details form
// Viewing the form
Route::get('/upload/spouse-details', [SpouseDetailController::class, "viewSpouseDetailsForm"])->name('spouse details');
// Uploading the spouse details
Route::post('/upload/spouse-details/', [SpouseDetailController::class, "uploadSpouseDetails"])->name('student_upload_spouse_details');


// Next of kin details form
// Viewing the form
Route::get('/next-of-kin-details', [NextOfKinDetailController::class, "viewNextOfKinDetailsForm"])->name('next of kin details');
// Uploading the next of kin details
Route::post('/upload/next-of-kin-details', [NextOfKinDetailController::class, "uploadNextOfKinDetails"])->name('student_upload_next_of_kin_details');


// The emergency details form
// Viewing the form
Route::get('/emergency-contact-details', [EmergencyDetailController::class, "viewEmergencyContactDetailsForm"])->name('emergency contact details');
// Uploading the emergency contact details
Route::post('/upload/emergency-contact-details', [EmergencyDetailController::class, "uploadEmergencyContactDetails"])->name('student_upload_emergency_contact_details');


// The highschool details
// Viewing the form
Route::get('/high-school-details', [HighSchoolDetailController::class, "viewHighShoolDetailsForm"])->name('high-school-details');
// Uploading the high school details
Route::post('/upload/high-school-details', [HighSchoolDetailController::class, "uploadHighSchoolDetails"])->name('student_upload_high_school_details');


// The other institution details
// Viewing the form
Route::get('/other-institution-details', [OtherInstitutionDetailController::class, "viewOtherInstitutionDetailsForm"])->name('other-institution-details');
// Uploading the high school details
Route::post('/upload/other-institution-details', [OtherInstitutionDetailController::class, "uploadOtherInstitutionDetails"])->name('student_upload_other_institution_details');


// The games and sport details
// Viewing the form
Route::get('/games-and-sports-details', [GameAndSportDetailController::class, "viewGameAndSportDetailsForm"])->name('games and sports details');
// Uploading the games and sports details
Route::post('/upload/games-and-sports-details', [GameAndSportDetailController::class, "uploadGameAndSportDetails"])->name('student_upload_games_and_sports_details');

// The clubs and societies
// Viewing the form
Route::get('/clubs-and-societies-details', [ClubAndSocietyController::class, "viewClubAndSocietyDetailsForm"])->name('clubs and societies details');
// Uploading the games and sports details
Route::post('/upload/clubs-and-societies-details', [ClubAndSocietyController::class, "uploadClubAndSocietiesDetails"])->name('student_upload_clubs_and_societies_details');

// The Other Details Form
//Viewing the form
Route::get('/other-details', [OtherDetailController::class, "viewOtherDetailsForm"])->name('other details');
// Uploading the games and sports details
Route::post('/upload/other-details/', [OtherDetailController::class, "uploadOtherDetails"])->name('student_upload_other_details');

// The Files Details Form
//Viewing the form
Route::get('/files-details', [FileDetailController::class, "viewFileDetailsForm"])->name('files details');
// Uploading the games and sports details
Route::post('/upload/files-details', [FileDetailController::class, "uploadFileDetails"])->name('student_upload_files_details');

Route::get('/student-details-report', [StudentDetailReportController::class, "viewStudentDetailsReport"])->name('student details report');

});







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





    