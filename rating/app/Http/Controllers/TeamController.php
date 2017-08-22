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
    public static function teamList()
    {
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
    public function teamDetail(Request $request)
    {
        $id = $request->get('id');
        if ($id) {
            $team = Team::where('team_id', $id)->first();
            $players = Players::where('team', $team->name)->get();

//            return view('teamDetail', compact('team', 'players'));

            $count = TeamRating::where('team_id', $id)->count();


            $info = [
                'attackTotal' => 0,
                'defenceTotal' => 0,
                'teamPlayTotal' => 0,
                'disciplineTotal' => 0,
                'attackAverage' => 0,
                'defenceAverage' => 0,
                'teamPlayAverage' => 0,
                'disciplineAverage' => 0,
            ];
            if ($count) {
                $list = TeamRating::where('team_id', $id)->get();
                foreach ($list as $item) {
                    $info['attackTotal']  += $item->attack;
                    $info['defenceTotal']  += $item->defence;
                    $info['teamPlayTotal']  += $item->team_play;
                    $info['disciplineTotal']  += $item->discipline;
                }

                $info['attackAverage'] = $info['attackTotal'] / $count;
                $info['defenceAverage'] = $info['defenceTotal'] / $count;
                $info['teamPlayAverage'] = $info['teamPlayTotal'] / $count;
                $info['disciplineAverage'] = $info['disciplineTotal'] / $count;
            }

            return view('teamDetail')->with('team', $team)->with('info', $info);
        }
        return view('teamDetail');
    }

    //save rating
    public function saveTeamRating(Request $request)
    {
//        $saveResult = \App\TeamRating::saveTeamRating($request);
        $saveResult ='f';
        if ($saveResult) {
            return view('rateSuccess');
        } else {
            //error page
        }
    }


}
