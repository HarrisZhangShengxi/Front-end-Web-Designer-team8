<?php

namespace App\Http\Controllers;

use App\Players;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class SearchController extends Controller
{

    //Searching
    public function searching(Request $request)
    {
        $content = $request->get('content');
        $str = Str::lower($content);
        if($_POST["option"] == "Player" && $str != '') {
            switch ($str):
                case 'forward':
                    $player = Players::where('position', 'forward')->get();
                    return redirect('searchPlayerList'.$player);
                case 'midfielder':
                    $player = Players::where('position', 'midfielder')->get();
                    return redirect('searchPlayerList'.$player);
                case 'defender':
                    $player = Players::where('position', 'defender')->get();
                    return redirect('searchPlayerList' . $player);
                case 'goalkeeper':
                    $player = Players::where('position', 'goalkeeper')->get();
                    return redirect('searchPlayerList' . $player);
                default:
                    $this->find_player($str);
            endswitch;
        }//find specific player
        elseif($_POST["option"] == "Team" && $str != '') {
            $team = Team::where('name', $str)->first();
            return view('teamDetail', compact('team'));
        }//find specific team
        elseif($_POST["option"] == "Player" && $str == '') {
            PlayerController::playerList();
        }
        elseif($_POST["option"] == "Team" && $str == '') {
            TeamController::teamList();
        }
        else {
            return view('searching');
        }
        return view('searching');
    }

    public function find_player($a){
        $playerDetail = Players::where('name', $a)->first();
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

        return view('searching');
    }
}
