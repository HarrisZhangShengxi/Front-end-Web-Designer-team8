<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PlayerRating extends Model
{
    //
    protected $fillable = [
        'team_num', 'attack', 'defence', 'team_play', 'discipline', 'comment'
    ];

    //
    protected $hidden = [
        'remember_token', 'created_at', 'updated_at',
    ];

    protected $table = "playerratings";

    public $timestamps = false;

    public static function savePlayerRating(Request $request) {
//        $teamratingId = $request->get("teamratingId");
        $playerId = $request->get("playerId");
        $skills = $request->get("skills");
//        $attackRating = $request->get("attackRating");
        $phyical = $request->get("phyical");
        $attack = $request->get ("attack");
        $defence = $request->get("defence");
        $weakfoot = $request->get("weakfoot");
        $teamPlay = $request->get("teamplay");
        $comment = $request->get("comment");

        $saveResult = \App\PlayerRating::create([
//            "id"=> $teamratingId,
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
