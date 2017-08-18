<?php

namespace App\Http\Controllers;

use App\Defenders;
use App\Forwards;
use App\Goalkeepers;
use App\Midfielders;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Psy\Util\Str;

class SearchController extends Controller
{

    //Searching
    public function searching(Request $request)
    {
        $content = $request->get('content');
        $str = Str::lower($content);
        if(Input::get('type') == "Player" && $str != '') {
            switch ($str):
                case 'forward':
                    $player = Forwards::all();
                    return view('');
                case 'midfielder':
                    $player = Midfielders::all();
                    return view('');
                case 'defender':
                    $player = Defenders::all();
                    return view('');
                case 'goalkeeper':
                    $player = Goalkeepers::all();
                    return view('');
                default:
                    $this->find_player($str);
            endswitch;
        }//find specific player
        elseif(Input::get('type') == "Team" && $str != '') {
            $team = Team::where('name', $str)->first();
            return view('teamDetail', compact('team'));
        }//find specific team
        elseif(Input::get('type') == "Player" && $str == '') {
            PlayerController::playerList();
        }
        elseif(Input::get('type') == "Team" && $str == '') {
            TeamController::teamList();
        }
        else {

        }
    }

    public function find_player($player){
        $re1 = Forwards::where('name', $player)->first();
        $re2 = Midfielders::where('name', $player)->first();
        $re3 = Defenders::where('name', $player)->first();
        $re4 = Goalkeepers::where('name', $player)->first();

        if($re1) { return view('forwardDetail', compact('re1')); }
        elseif ($re2) { return view('midfielderDetail', compact('re2')); }
        elseif ($re3) { return view('defenderDetail', compact('re3')); }
        elseif ($re4) { return view('goalkeeperDetail', compact('re4')); }
        else { }
    }
}
