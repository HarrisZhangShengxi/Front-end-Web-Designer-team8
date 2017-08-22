<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamRating extends Model
{
    //
    protected $fillable = [
        'user_id', 'team_id', 'attack', 'defence', 'team_play', 'discipline', 'comment'
    ];

    //
    protected $hidden = [
        'remember_token', 'created_at', 'updated_at',
    ];

    protected $table = "teamratings";

    public $timestamps = false;

    public static function saveTeamRating(Request $request) {

        $user = Auth::user();

        if ($user == null) {
            return;
        }

        $teamratingId = $request->get("teamratingId");
        $userId = $user->id;
        $teamId = $request->get("teamId");
        $attack = $request->get("attack");
//        $attackRating = $request->get("attackRating");
        $defence = $request->get("defence");
        $teamPlay = $request->get("teamplay");
        $discipline = $request->get("discipline");
        $comment = $request->get("comment");

        $saveResult = \App\TeamRating::create([
//            "id"=> $teamratingId,
            "user_id"=> $userId,
            "team_id"=> $teamId,
            "attack" => $attack,
            "defence" => $defence,
            "team_play" => $teamPlay,
            "discipline"=> $discipline,
            "comment"=> $comment,
        ]);

        return $saveResult;
    }
}
