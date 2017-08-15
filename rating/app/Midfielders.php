<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midfielders extends Model
{
    //
    protected $fillable = [
        'name', 'age', 'height', 'country', 'team', 'appearance', 'shooting_accuracy',
        'goals', 'passing_accuracy', 'assists', 'foul_conceded',
        'tackle_success', 'yellow/red_card',
    ];

    //
    protected $hidden = [
        'created_at', 'updated_at', 'remember_token',
    ];
}
