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
    Goal Conceded: {{$playerDetail->goal_conceded}}<br>
    Interceptions: {{$playerDetail->interceptions}}<br>
    Total Clearances: {{$playerDetail->total_clearances}}<br>
    Tackle Success: {{$playerDetail->tackle_success}}<br>
    Yellow/Red Card: {{$playerDetail->yellow_red_card}}<br>
    <hr>

@endsection