<?php

namespace App\Http\Controllers;

use App\Team;
use App\TeamRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{

    //display all teams
    public static function teamList() {
        $teamlist = Team::all();
        return view('teamlist')->with('teamlist', $teamlist);
    }

//    //find team
//    public function find_team(Request $request) {
//        $content = $request->get('content');
//        $team = Team::where('name', $content)->first();
//        return view('teamDetail', compact('team'));
//    }

    //Team detail
    public function teamDetail(Request $request){
        $id = $request->get('id');
        if ($id) {
            $team = Team::where('team_id', $id)->first();
            return view('teamDetail', compact('team'));
//            return view('teamDetail')->with('team', $team);
        }
        return view('teamDetail');
    }

    //save rating
    public function saveRating(Request $request) {
        $saveResult = \App\TeamRating::saveRating($request);
        echo $saveResult;
    }


}
