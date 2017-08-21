@extends('layouts.index')

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
        <input type='hidden' name='playerratingId' value='{{$fplayer->id}}'>
        <input type='hidden' name='playerId' value='{{$fplayer->player_id}}'>
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
        Comment: <input type='text' name='comment' value='{{$fplayer->comment}}'><br>
        <input type='submit' value='Rate!'>
    </form>

@endsection