<?php

namespace App\Http\Controllers;

use App\PlayerRating;
use App\Players;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //display all players
    public static function playerList()
    {
        $playerlist = Players::all();
        return view('playerList', compact('playerlist'));
    }

    //player detail
    public function playerDetail(Request $request)
    {

        $id = $request->get('id');
        $playerDetail = Players::where('player_id', $id)->first();
        $position = $playerDetail->position;


        $count = PlayerRating::where('player_id', $id)->count();

        $info = [
            'skillsTotal' => 0,
            'phyicalTotal' => 0,
            'attackTotal' => 0,
            'defenceTotal' => 0,
            'weakfootTotal' => 0,
            'teamPlayTotal' => 0,

            'skillsAverage' => 0,
            'phyicalAverage' => 0,
            'attackAverage' => 0,
            'defenceAverage' => 0,
            'weakfootAverage' => 0,
            'teamPlayAverage' => 0,
        ];
        if ($count) {
            $list = PlayerRating::where('player_id', $id)->get();
            foreach ($list as $item) {
                $info['skillsTotal']  += $item->skills;
                $info['phyicalTotal']  += $item->phyical;
                $info['attackTotal']  += $item->attack;
                $info['defenceTotal']  += $item->defence;
                $info['weakfootTotal']  += $item->weak_foot;
                $info['teamPlayTotal']  += $item->team_play;
            }

            $info['skillsAverage'] = $info['skillsTotal'] / $count;
            $info['phyicalAverage'] = $info['phyicalTotal'] / $count;
            $info['attackAverage'] = $info['attackTotal'] / $count;
            $info['defenceAverage'] = $info['defenceTotal'] / $count;
            $info['teamPlayAverage'] = $info['teamPlayTotal'] / $count;
            $info['weakfootAverage'] = $info['weakfootTotal'] / $count;
        }
        if ($position == "goalkeeper") {
            return view('goalkeeperDetail', compact('playerDetail'))->with('info', $info);
        } elseif ($position == "defender") {
            return view('defenderDetail', compact('playerDetail'))->with('info', $info);
        } elseif ($position == "midfielder") {
            return view('midfielderDetail', compact('playerDetail'))->with('info', $info);
        } else {
            return view('forwardDetail', compact('playerDetail'))->with('info', $info);
        }
    }


//
    //save rating
    public function savePlayerRating(Request $request)
    {
        $saveResult = \App\PlayerRating::savePlayerRating($request);
        echo $saveResult;
        if ($saveResult) {
            return view('rateSuccess');
        } else {
            //error page
        }
    }
}