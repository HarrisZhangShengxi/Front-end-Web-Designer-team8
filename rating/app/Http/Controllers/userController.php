<?php

namespace App\Http\Controllers;

use App\PlayerRating;
use App\TeamRating;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function user() {
        //
        $user = User::where('email', $email)->first();
        $id = $user -> id;
        $TRating = TeamRating::where('user_id', $id)->get();
        $PRating = PlayerRating::where('user_id', $id)->get();

        return view('userCenter', compact('TRating', 'PRating'));
    }
}
