@extends('layouts.app')

@section('content')

    {{$team->name}}<br>
    {{$team->shooting_accuracy}}<br>
    {{$team->goals}}<br>
    {{$team->passing_accuracy}}<br>
    {{$team->assists}}<br>
    {{$team->tackle}}<br>
    {{$team->tackle_success}}<br>
    {{$team->yellow_card}}<br>
    {{$team->red_card}}<br>
    <hr>

    Attack: <br>
    <form action="/saveRating" method="post">
        {{csrf_field()}}
        score:<select title='team_rating' name="attackRating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type='hidden' name='teamratingId' value='{{$team->id}}'>
        <input type='hidden' name='teamNum' value='{{$team->team_num}}'>
        <input type='hidden' name='attack' value='{{$team->attack}}'>
        <input type='hidden' name='defence' value='{{$team->defence}}'>
        <input type='hidden' name='teamPlay' value='{{$team->team_play}}'>
        <input type='hidden' name='discipline' value='{{$team->discipline}}'>
        Comment: <input type='text' name='comment' value='{{$team->comment}}'>
        <input type='submit' value='Rate!'>
    </form>
    <hr>

    defence: <br>


@endsection