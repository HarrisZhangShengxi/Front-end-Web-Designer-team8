<?php

namespace App\Http\Controllers;

use App\Defenders;
use App\Forwards;
use App\Goalkeepers;
use App\Midfielders;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //display all players
    public static function playerList() {
        $glist = Goalkeepers::all();
        $dlist = Defenders::all();
        $mlist = Midfielders::all();
        $flist = Forwards::all();
        return view('playerList', compact('glist','dlist','mlist','flist'));
    }

    //Team detail
    public function playerDetail(Request $request){

        $gid = $request->get('g_id');
        $did = $request->get('d_id');
        $mid = $request->get('m_id');
        $fid = $request->get('f_id');
        if ($gid) {
            $gplayerDetail = Goalkeepers::where('gplayer_id', $gid)->first();
            return view('goalkeeperDetail')->with('gplayer', $gplayerDetail);
        }
        elseif ($did) {
            $dplayerDetail = Defenders::where('dplayer_id', $did)->first();
            return view('defenderDetail')->with('dplayer', $dplayerDetail);
        }
        elseif ($mid) {
            $mplayerDetail = Midfielders::where('mplayer_id', $mid)->first();
            return view('midfielderDetail')->with('mplayer', $mplayerDetail);
        }
        else {
            $fplayerDetail = Forwards::where('fplayer_id', $fid)->first();
            return view('forwardDetail')->with('fplayer', $fplayerDetail);
        }
    }
//
//    //save rating
//    public function saveRating(Request $request) {
//        $saveResult = \App\PlayerRating::saveRating($request);
//        echo $saveResult;
//    }

}
