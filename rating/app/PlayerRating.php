<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public static function saveRating(Request $request) {
//        $teamratingId = $request->get("teamratingId");
        $playerId = $request->get("playerId");
        $attack = $request->get("attack");
//        $attackRating = $request->get("attackRating");
        $defence = $request->get("defence");
        $teamPlay = $request->get("teamplay");
        $discipline = $request->get("discipline");
        $comment = $request->get("comment");

        $saveResult = \App\TeamRating::create([
//            "id"=> $teamratingId,
            "player_id"=> $teamId,
            "attack" => $attack,
            "defence" => $defence,
            "team_play" => $teamPlay,
            "discipline"=> $discipline,
            "comment"=> $comment,
        ]);

        return $saveResult;
    }
}
