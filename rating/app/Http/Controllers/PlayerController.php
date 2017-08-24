<?php

namespace App\Http\Controllers;

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
        if ($position == "goalkeeper") {
            return view('goalkeeperDetail', compact('playerDetail'));
        } elseif ($position == "defender") {
            return view('defenderDetail', compact('playerDetail'));
        } elseif ($position == "midfielder") {
            return view('midfielderDetail', compact('playerDetail'));
        } else {
            return view('forwardDetail', compact('playerDetail'));
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