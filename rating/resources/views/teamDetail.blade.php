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
        <div class="box" id="attackStar" data-type="attack">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </div>
        <input type="text" name="attack">
        <div id="attackScore"></div>
<br>

        <input type='hidden' name='teamratingId' value='{{$team->id}}'>
        <input type='hidden' name='teamId' value='{{$team->team_id}}'>
        <br>
        Defence:
            <div class="box" id="defenceStar" data-type="defence">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </div>
        <input type="text" name="defence">
        <div id="defenceScore"></div>

        <br>
        Teamplay:
            <div class="box" id="teamplayStar" data-type="teamplay">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </div>
        <input type="text" name="teamplay">
        <div id="teamplayScore"></div>
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        <br>
        Discipline:
            <div class="box" id="disciplineStar" data-type="discipline">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </div>
        <input type="text" name="discipline">
        <div id="disciplineScore"></div>
        <br>
        Comment: <input type='text' name='comment' value='{{$team->comment}}'><br>
        <input type='submit' value='Rate!'>
    </form>



@endsection
@section('script')
    <script>

        $(".box li").click(function() {
            var index = $(this).index();
            var type = $(this).parent().attr("data-type");
            var parentId = $(this).parent().attr("id");
            $("#" + parentId).find("li").css("background-image", "url('http://www.jq22.com/tp/537e9b2e-b92f-4dd2-ae1a-0c708827ea99.png')");
            for (var i = 0; i <= index; i++) {
                $("#" + parentId).find("li").eq(i).css("background-image", "url('http://www.jq22.com/tp/da9927e6-d099-45d8-a47c-00c882bcbdfa.png')");
            }

            $("input[name='" + type +"']").val(parseInt(index) + 1);
            $("#" + type + "Score").text("Choosen Score:" + (parseInt(index) + 1));
        });
    </script>
@endsection