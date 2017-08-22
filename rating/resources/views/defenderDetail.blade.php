@extends('layouts.index')

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

    <form action="/saveplayerRating" method="post">
        {{csrf_field()}}
        Skills:
        <select title='player_rating' name="skills">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type='hidden' name='playerratingId' value='{{$dplayer->id}}'>
        <input type='hidden' name='playerId' value='{{$dplayer->player_id}}'>
        {{--<input type='' name='attack' value='{{$team->attack}}'>--}}
        <br>
        Phyical:
        <select title='player_rating' name="phyical">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        {{--<input type='' name='defence' value='{{$team->defence}}'>--}}
        <br>
        Attack:
        <select title='player_rating' name="attack">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        <br>
        Defence:
        <select title='player_rating' name="defence">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        {{--<input type='' name='discipline' value='{{$team->discipline}}'>--}}
        <br>
        Weak Foot:
        <select title='player_rating' name="weak_foot">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        <br>Teamplay:
        <select title='player_rating' name="teamplay">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        <br>
        Comment: <input type='text' name='comment' value='{{$dplayer->comment}}'><br>
        <input type='submit' value='Rate!'>
    </form>

@endsection