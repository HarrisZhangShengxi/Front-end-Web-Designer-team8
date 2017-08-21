<?php

namespace App\Http\Controllers;

use App\Players;
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
            $players = Players::where('team', $team->name)->get();
            return view('teamDetail', compact('team', 'players'));
//            return view('teamDetail')->with('team', $team);
        }
        return view('teamDetail');
    }

    //save rating
    public function saveTeamRating(Request $request) {
        $saveResult = \App\TeamRating::saveTeamRating($request);
        echo $saveResult;
    }


}
