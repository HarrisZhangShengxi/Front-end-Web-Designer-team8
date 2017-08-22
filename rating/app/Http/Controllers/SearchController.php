<?php

namespace App\Http\Controllers;

use App\PlayerRating;
use App\Players;
use App\Team;
use App\TeamRating;
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
        $advance = $request->get('advance');
        if($option == "Player" && $str != '') {
            switch ($str):
                case 'forward':
                    $playerlist = Players::where('position', 'forward')->get();
                    return view('playerList', compact('playerlist'));
                case 'midfielder':
                    $playerlist = Players::where('position', 'midfielder')->get();
                    return view('playerList', compact('playerlist'));
                case 'defender':
                    $playerlist = Players::where('position', 'defender')->get();
                    return view('playerList', compact('playerlist'));
                case 'goalkeeper':
                    $playerlist = Players::where('position', 'goalkeeper')->get();
                    return view('playerList', compact('playerlist'));
                default:
                    $playerDetail = Players::where('name', 'like', "%$str%");
                    $count = $playerDetail->count();
                    if($count > 1) {
                        $playerDetail = $playerDetail->get();
                        return view('playerList')->with('playerlist', $playerDetail);
                    }
                    elseif($count == 1) {
                        $playerDetail = $playerDetail->first();
                        $pos = $playerDetail->position;

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
                    }
                    else {return view('searching');}
            endswitch;
        }
        elseif($option == "Team" && $str != '') {
            $team = Team::where('name', 'like', "%$str%");
            $count = $team->count();
            if($count > 1) {
                $teamlist = $team->get();
                return view('teamlist', compact('teamlist'));
            }
            elseif ($count == 1) {
                $team = $team->first();
                $name = $team->name;
                $players = Players::where('team', $name)->get();
                return view('teamDetail', compact('team', 'players'));
            }
            else{
                return view('searching');
            }
        }
        elseif($option == "Player" && $advance == "Rate" && $str != '') {
            $PR = PlayerRating::where($str)->join('players', 'player_id')->get();
            return view('playerList')->with('playerlist', $PR);
//            $TR = TeamRating::where($str)->join('teams', 'team_id')->get('name');
//            return view('searchRatingList', compact('PR', 'TR'));
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
