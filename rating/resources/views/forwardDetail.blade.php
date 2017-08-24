@extends('layouts.index')

@section('content')
    <head>
        <style>
            .box {
                width:200px;
                height:40px;
            }
            .box li {
                height:40px;
                width:40px;
                background:url(http://www.jq22.com/tp/537e9b2e-b92f-4dd2-ae1a-0c708827ea99.png);
                background-repeat:no-repeat;
                background-size:25px 25px;
                list-style:none;
                background-position:center;
                float:left;
                cursor:pointer;
            }
        </style>
    </head>

    <div id="content">
        <!-- Mission Statement -->
        <div class="mission text-center block block-pd-sm block-bg-noise">
            <div class="container">
                <h4 class="text-shadow-white">
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
                </h4>
            </div>
        </div>
    </div>

    <form action="/savePlayerRating" method="post">
        {{csrf_field()}}
        Skills:
        <select title='player_rating' name="skills">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type='hidden' name='playerratingId' value='{{$playerDetail->id}}'>
        <input type='hidden' name='playerId' value='{{$playerDetail->player_id}}'>
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
        Comment: <input type='text' name='comment' value='{{$playerDetail->comment}}'><br>
        <input type='submit' value='Rate!'>
    </form>

@endsection