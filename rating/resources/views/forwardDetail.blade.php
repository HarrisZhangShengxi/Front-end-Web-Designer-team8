@extends('layouts.app')

@section('content')

    Name: {{$fplayer->name}}<br>
    Age: {{$fplayer->age}}<br>
    Height: {{$fplayer->height}}<br>
    Country: {{$fplayer->country}}<br>
    Team: {{$fplayer->team}}<br>
    Appearance: {{$fplayer->appearance}}<br>
    Shooting Accuracy: {{$fplayer->shooting_accuracy}}<br>
    Goals: {{$fplayer->goals}}<br>
    Passing Accuracy: {{$fplayer->passing_accuracy}}<br>
    Assists: {{$fplayer->assists}}<br>
    Foul Conceded: {{$fplayer->foul_conceded}}<br>
    Tackles: {{$fplayer->tackles}}<br>
    Yellow/Red Card: {{$fplayer->yellow_red_card}}<br>
    <hr>

@endsection