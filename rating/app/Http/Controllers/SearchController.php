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
        echo $advance;
        if($option == "Player" && $advance == null && $str != '') {
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
        elseif($option == "Team" && $advance == null && $str != '') {
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
        elseif ($option == "Player" && $advance == 1 && $str != '') {
            $prd = PlayerRating::join('players', 'playerratings.player_id', '=', 'players.player_id')
                ->where('name', 'like', "%$str%")
                ->orderByRaw('skills, phyical, attack, defence, weak_foot, team_play')->get();
            return view('playerRatingList', compact( 'prd'));
        }
        elseif ($option == "Team" && $advance == 1 && $str != '') {
            $trd = TeamRating::join('teams', 'teamratings.team_id', '=', 'teams.team_id')
                ->where('name', 'like', "%$str%")
                ->orderByRaw("attack, defence, team_play, discipline")->get();
            return view('teamRatingList', compact('trd'));
        }
        elseif ($option == "Player" && $advance == 2 && $str != '') {
            $prd = PlayerRating::join('players', 'playerratings.player_id', '=', 'players.player_id')
                ->where('name', 'like', "%$str%")
                ->latest('playerratings.created_at')->get();
            return view('playerRatingList', compact('prd'));
        }
        elseif ($option == "Team" && $advance == 2 && $str != '') {
            $trd = TeamRating::join('teams', 'teamratings.team_id', '=', 'teams.team_id')
                ->where('name', 'like', "%$str%")
                ->latest('teamratings.created_at')->get();
            return view('teamRatingList', compact('trd'));
        }
        elseif($option == "Player" && $str == '') {
            $playerlist = Players::all();
            return view('playerList', compact('playerlist'));
        }
        elseif($option == "Team" && $str == '') {
            $teamlist = Team::all();
            return view('teamlist')->with('teamlist', $teamlist);
        }
        else {
            return view('searching');
        }
        return view('searching');
    }
}
