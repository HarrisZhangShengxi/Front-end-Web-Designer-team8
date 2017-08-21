@extends('layouts.app')

@section('content')

    Name: {{$playerDetail->name}}<br>
    Age: {{$playerDetail->age}}<br>
    Height: {{$playerDetail->height}}<br>
    Country: {{$playerDetail->country}}<br>
    Team: {{$playerDetail->team}}<br>
    Position: {{$playerDetail->position}}<br>
    Appearance: {{$playerDetail->appearance}}<br>
    Shooting Accuracy: {{$playerDetail->shooting_accuracy}}<br>
    Goals: {{$playerDetail->goals}}<br>
    Passing Accuracy: {{$playerDetail->passing_accuracy}}<br>
    Assists: {{$playerDetail->assists}}<br>
    Foul Conceded: {{$playerDetail->foul_conceded}}<br>
    Tackles: {{$playerDetail->tackles}}<br>
    Yellow/Red Card: {{$playerDetail->yellow_red_card}}<br>
    <hr>

@endsection