<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //display all players
    public static function playerList() {
        $playerlist = Players::all();
        return view('playerList', compact('playerlist'));
    }

    //player detail
//    public function playerDetail(Request $request){
//
//        $id = $request->get('id');
//        $playerDetail = Players::where('player_id', $id)->first();
////        $position = Players::where('player_id', $id)->get('position');
//        $position = $playerDetail -> position;
//        if ($position == "goalkeeper") {
//            return view('goalkeeperDetail', compact('playerDetail'));
//        }
//        elseif ($position == "defender") {
//            return view('defenderDetail', compact('playerDetail'));
//        }
//        elseif ($position == "midfielder") {
//            return view('midfielderDetail', compact('playerDetail'));
//        }
//        else {
//            return view('forwardDetail', compact('playerDetail'));
//        }
//    }

    //player detail
    public function playerDetail(Request $request){
        $id = $request->get('id');
        if ($id) {
            $player = Players::where('player_id', $id)->first();
//            $players = Players::where('team', $team->name)->get();
//            return view('playerDetail')->with('player',$player);
            return view('playerDetail', compact( 'player'));
        }
        return view('playerDetail');
    }

//
    //save rating
    public function savePlayerRating(Request $request) {
        $saveResult = \App\PlayerRating::savePlayerRating($request);
        echo $saveResult;
    }

}
