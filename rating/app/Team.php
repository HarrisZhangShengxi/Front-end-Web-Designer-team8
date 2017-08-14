<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'team_num', 'name', 'shooting_accuracy%', 'goals', 'passing_accuracy%',
        'assists', 'tackle', 'tackle_accuracy%', 'yellow_card', 'red_card',
        'remember_tocken',
    ];

    //
    protected $hidden = [
        'created_at', 'updated_at',
    ];


}
