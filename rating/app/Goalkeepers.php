<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goalkeepers extends Model
{
    //
    protected $fillable = [
        'name', 'age', 'height', 'country', 'team', 'appearance', 'clean_sheets',
        'goal_conceded', 'penalty_saves', 'distribution_accuracy', 'total_saves',
        'total_clearances', 'yellow_red_card',
    ];

    //
    protected $hidden = [
        'created_at', 'updated_at', 'remember_token',
    ];
}
