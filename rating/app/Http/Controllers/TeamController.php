<?php

namespace App\Http\Controllers;

use App\Team;
use App\TeamRating;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    //display all teams
    public function teamList() {
        $teamlist = Team::all();
        return view('teamlist')->with('teamlist', $teamlist);
    }

    //find team
    public function index(Request $request) {
        $id = $request->get("id");
        $team = Team::find($id);
        return view('team')->with("team", $team);
    }

    //Team detail
    public function teamDetail(Request $request){
        $id = $request->get('id');
        if ($id) {
            $teamDetail = Team::find($id);
            return view('teamDetail')->with('team', $teamDetail);
        }
        return view('teamDetail');
    }

    //save rating
    public function saveRating(Request $request) {
        $saveResult = \App\TeamRating::saveRating($request);
        echo $saveResult;
    }


}
