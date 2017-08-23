<?php

namespace App\Http\Controllers;

use App\PlayerRating;
use App\TeamRating;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //
    public function user() {
        //
        $email = Auth::user()->email;
        $user = User::where('email', $email)->first();
        $id = $user -> id;
        $TRating = TeamRating::join('teams','teamratings.team_id', '=', 'teams.team_id')
            ->where('user_id', $id)
            ->latest('teamratings.created_at')->get();
        $PRating = PlayerRating::join('players', 'playerratings.player_id', '=', 'players.player_id')
            ->where('user_id', $id)
            ->latest('playerratings.created_at')->get();


        return view('userCenter', compact('TRating', 'PRating', 'email'));
    }
}
