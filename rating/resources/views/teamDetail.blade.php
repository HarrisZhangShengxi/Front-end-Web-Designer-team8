@extends('layouts.index')

@section('content')

    Team: {{$team->name}}<br>
    Shooting Accuracy: {{$team->shooting_accuracy}}<br>
    Goals: {{$team->goals}}<br>
    Passing Accuracy: {{$team->passing_accuracy}}<br>
    Assists: {{$team->assists}}<br>
    Save: {{$team->save}}<br>
    Tackle Success: {{$team->tackle_success}}<br>
    Yellow Card: {{$team->yellow_card}}<br>
    Red Card: {{$team->red_card}}<br>
    <hr>
    Former Rating:<br>
    Overall:
    <hr>
    <form action="/saveTeamRating" method="post">
        {{csrf_field()}}
        Attack:
            <select title='team_rating' name="attack">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        <input type='hidden' name='teamratingId' value='{{$team->id}}'>
        <input type='hidden' name='teamId' value='{{$team->team_id}}'>
        {{--<input type='' name='attack' value='{{$team->attack}}'>--}}
        <br>
        Defence:
            <select title='team_rating' name="defence">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        {{--<input type='' name='defence' value='{{$team->defence}}'>--}}
        <br>
        Teamplay:
            <select title='team_rating' name="teamplay">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        <br>
        Discipline:
            <select title='team_rating' name="discipline">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        {{--<input type='' name='discipline' value='{{$team->discipline}}'>--}}
        <br>
        Comment: <input type='text' name='comment' value='{{$team->comment}}'><br>
        <input type='submit' value='Rate!'>
    </form>
@endsection