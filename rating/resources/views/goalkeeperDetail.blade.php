@extends('layouts.app')

@section('content')

        Name: {{$playerDetail->name}}<br>
        Age: {{$playerDetail->age}}<br>
        Height: {{$playerDetail->height}}<br>
        Country: {{$playerDetail->country}}<br>
        Team: {{$playerDetail->team}}<br>
        Position: {{$playerDetail->position}}<br>
        Appearance: {{$playerDetail->appearance}}<br>
        Clean Sheets: {{$playerDetail->clean_sheets}}<br>
        Goal Conceded: {{$playerDetail->goal_conceded}}<br>
        Penalty Saves: {{$playerDetail->penalty_saves}}<br>
        Distribution Accuracy: {{$playerDetail->distribution_accuracy}}<br>
        Total Saves: {{$playerDetail->total_saves}}<br>
        Total Clearances: {{$playerDetail->total_clearances}}<br>
        Yellow/Red Card: {{$playerDetail->yellow_red_card}}<br>
        <hr>


@endsection