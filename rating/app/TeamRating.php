<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class teams extends Model
{
    //
    protected $fillable = [
        'team_num', 'attack', 'defence', 'team_play', 'discipline', 'comment'
    ];

    //
    protected $hidden = [
        'remember_token', 'created_at', 'updated_at',
    ];

    protected $table = "teamratings";

    public $timestamps = false;

    public static function saveRating(Request $request) {
        $teamratingId = $request->get("teamratingId");
        $teamNum = $request->get("teamNum");
//        $attack = $request->get("attackRating");
        $attackRating = $request->get("attackRating");
        $defence = $request->get("defence");
        $teamPlay = $request->get("defence");
        $discipline = $request->get("discipline");

        $saveResult = \App\TeamRating::create([
            "id"=> $teamratingId,
            "teamNum"=> $teamNum,
            "attack" => $attackRating,
            "defence" => $defence,
            "teamPlay" => $teamPlay,
            "discipline"=> $discipline,
        ]);

        return $saveResult;
    }
}
