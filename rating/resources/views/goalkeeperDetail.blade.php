@extends('layouts.index')

@section('content')

        Name: {{$gplayer->name}}<br>
        Age: {{$gplayer->age}}<br>
        Height: {{$gplayer->height}}<br>
        Country: {{$gplayer->country}}<br>
        Team: {{$gplayer->team}}<br>
        Appearance: {{$gplayer->appearance}}<br>
        Clean Sheets: {{$gplayer->clean_sheets}}<br>
        Goal Conceded: {{$gplayer->goal_conceded}}<br>
        Penalty Saves: {{$gplayer->penalty_saves}}<br>
        Distribution Accuracy: {{$gplayer->distribution_accuracy}}<br>
        Total Saves: {{$gplayer->total_saves}}<br>
        Total Clearances: {{$gplayer->total_clearances}}<br>
        Yellow/Red Card: {{$gplayer->yellow_red_card}}<br>
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
            <input type='hidden' name='playerratingId' value='{{$gplayer->id}}'>
            <input type='hidden' name='playerId' value='{{$gplayer->player_id}}'>
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
            Comment: <input type='text' name='comment' value='{{$gplayer->comment}}'><br>
            <input type='submit' value='Rate!'>
        </form>
@endsection