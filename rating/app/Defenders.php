<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defenders extends Model
{
    //
    protected $fillable = [
        'name', 'age', 'height', 'country', 'team', 'appearance', 'shooting_accuracy',
        'goals', 'goals_conceded', 'interceptions', 'total_clearances', 'tackle_success',
        'yellow/red_card',
    ];

    //
    protected $hidden = [
        'created_at', 'updated_at', 'remember_token',
    ];
}
