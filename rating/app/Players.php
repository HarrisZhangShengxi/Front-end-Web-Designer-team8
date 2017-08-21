<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    //
    protected $fillable = [
        'name', 'age', 'height', 'country', 'team', 'position', 'appearance', 'shooting_accuracy',
        'goals', 'goals_conceded', 'interceptions', 'total_clearances', 'clean_sheets',
        'total_saves', 'penalty_saves', 'distribution_accuracy', 'passing_accuracy', 'assists', 'foul_conceded',
        'tackles' ,'tackle_success',
        'yellow_red_card',
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'remember_token',
    ];
}
