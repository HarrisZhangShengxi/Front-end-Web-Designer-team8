@extends('layouts.app')

@section('content')

    Name: {{$dplayer->name}}<br>
    Age: {{$dplayer->age}}<br>
    Height: {{$dplayer->height}}<br>
    Country: {{$dplayer->country}}<br>
    Team: {{$dplayer->team}}<br>
    Appearance: {{$dplayer->appearance}}<br>
    Shooting Accuracy: {{$dplayer->shooting_accuracy}}<br>
    Goals: {{$dplayer->goals}}<br>
    Goal Conceded: {{$dplayer->goal_conceded}}<br>
    Interceptions: {{$dplayer->interceptions}}<br>
    Total Clearances: {{$dplayer->total_clearances}}<br>
    Tackle Success: {{$dplayer->tackle_success}}<br>
    Yellow/Red Card: {{$dplayer->yellow_red_card}}<br>
    <hr>

@endsection