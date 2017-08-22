<?php

namespace App\Http\Controllers;

use App\Players;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{

    //Searching
    public function searching(Request $request)
    {
        $content = $request->get('text');
        $str = Str::lower($content);
        $option = $request->get('option');
        if($option == "Player" && $str != '') {
            switch ($str):
                case 'forward':
                    $player = Players::where('position', 'forward')->get();
                    return view('searchPlayerList', compact('player'));
                case 'midfielder':
                    $player = Players::where('position', 'midfielder')->get();
                    return view('searchPlayerList', compact('player'));
                case 'defender':
                    $player = Players::where('position', 'defender')->get();
                    return view('searchPlayerList', compact('player'));
                case 'goalkeeper':
                    $player = Players::where('position', 'goalkeeper')->get();
                    return view('searchPlayerList', compact('player'));
                default:
                    $playerDetail = Players::where('name', $str)->first();
                    $pos = $playerDetail -> position;

                    switch ($pos):
                        case 'forward':
                            return view('forwardDetail', compact('playerDetail'));
                        case 'midfielder':
                            return view('midfielderDetail', compact('playerDetail'));
                        case 'defender':
                            return view('defenderDetail', compact('playerDetail'));
                        case 'goalkeeper':
                            return view('goalkeeperDetail', compact('playerDetail'));
                    endswitch;
            endswitch;
        }
        elseif($option == "Team" && $str != '') {
            $team = Team::where('name', $str)->first();
            $players = Players::where('team', $str)->get();
            return view('teamDetail', compact('team', 'players'));
        }
        elseif($option == "Player" && $str == '') {
            $playerlist = Players::all();
            return view('playerList', compact('playerlist'));        }
        elseif($option == "Team" && $str == '') {
            $teamlist = Team::all();
            return view('teamlist')->with('teamlist', $teamlist);        }
        else {
            return view('searching');
        }
        return view('searching');
    }
}
