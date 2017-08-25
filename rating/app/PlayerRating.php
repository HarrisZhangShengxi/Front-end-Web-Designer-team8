<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerRating extends Model
{
    //
    protected $fillable = [
        'user_id', 'player_id', 'skills', 'phyical', 'attack', 'defence', 'weak_foot', 'team_play', 'comment'
    ];

    //
    protected $hidden = [
        'remember_token', 'created_at', 'updated_at',
    ];

    protected $table = "playerratings";

    public $timestamps = false;

    public static function savePlayerRating(Request $request) {

        $user = Auth::User();

        if ($user == null) {
            return;
        }
//        $teamratingId = $request->get("teamratingId");
        $userId = $user->id;
        $playerId = $request->get("playerId");
        $skills = $request->get("skills");
//        $attackRating = $request->get("attackRating");
        $phyical = $request->get("phyical");
        $attack = $request->get ("attack");
        $defence = $request->get("defence");
        $weakfoot = $request->get("weak_foot");
        $teamPlay = $request->get("teamplay");
        $comment = $request->get("comment");

        $saveResult = \App\PlayerRating::create([
//            "id"=> $teamratingId,
            "user_id"=> $userId,
            "player_id"=> $playerId,
            "skills" => $skills,
            "phyical" => $phyical,
            "attack" => $attack,
            "defence" => $defence,
            "weak_foot"=> $weakfoot,
            "team_play" => $teamPlay,
            "comment"=> $comment,
        ]);

        return $saveResult;
    }
}
