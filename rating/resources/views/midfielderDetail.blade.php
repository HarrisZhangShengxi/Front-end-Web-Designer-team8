@extends('layouts.app')

@section('content')

    Name: {{$mplayer->name}}<br>
    Age: {{$mplayer->age}}<br>
    Height: {{$mplayer->height}}<br>
    Country: {{$mplayer->country}}<br>
    Team: {{$mplayer->team}}<br>
    Appearance: {{$mplayer->appearance}}<br>
    Shooting Accuracy: {{$mplayer->shooting_accuracy}}<br>
    Goals: {{$mplayer->goals}}<br>
    Passing Accuracy: {{$mplayer->passing_accuracy}}<br>
    Assists: {{$mplayer->assists}}<br>
    Foul Conceded: {{$mplayer->foul_conceded}}<br>
    Tackle Success: {{$mplayer->tackle_success}}<br>
    Yellow/Red Card: {{$mplayer->yellow_red_card}}<br>
    <hr>

@endsection