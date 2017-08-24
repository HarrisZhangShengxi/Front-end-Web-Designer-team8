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
    Overall:<br>
    Attack: {{$info['attackAverage']}}<br>
    Defence: {{$info['defenceAverage']}}<br>
    Teamplay: {{$info['teamPlayAverage']}}<br>
    Discipline: {{$info['disciplineAverage']}}<br>
    <hr>

    @foreach($players as $item)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?id={{$item->player_id}}">
                        {{$item->name}}
                    </a>
                </td>
            </tr>
        </table>
    <hr>
    @endforeach

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

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="path/to/js/star-rating.min.js" type="text/javascript"></script>

    <script scr="{{  asset('js/starRating.js') }}"></script>
@endsection