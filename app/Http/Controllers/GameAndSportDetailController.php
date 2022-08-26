<?php

namespace App\Http\Controllers;

use App\Models\GameAndSportDetail;
use Illuminate\Http\Request;

class GameAndSportDetailController extends Controller
{
    //View the highschool details form
    public function viewGameAndSportDetailsForm() {
        return view('crud.student_crud.games_and_sports_details');
    }

    //Uploading the High School details
    public function uploadGameAndSportDetails(Request $request) {
        // Validation
        $request->validate([
            'games_and_sports'=>'required',
        ]);

        // Fetching the data
        $games_and_sports = implode(',', $request->input('games_and_sports'));
        $games_representation = $request->games_representation;

        // Saving the data into the db
        $games_and_sports_details = new  GameAndSportDetail();

        $games_and_sports_details->games_and_sports = $games_and_sports;
        $games_and_sports_details->games_representation = $games_representation;

        // Save
        $games_and_sports_details->save();

        // return redirect('/crud/student_crud/games_and_sports_details');
        return redirect()->to('clubs_and_societies_details')->with('success', "Your games and sports details have been received successfully! Now fill in the clubs and societies details form below...");
    }
}
