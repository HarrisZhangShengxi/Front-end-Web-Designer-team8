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
                Team: {{$team->name}}<br>
                Shooting Accuracy: {{$team->shooting_accuracy}}<br>
                Goals: {{$team->goals}}<br>
                Passing Accuracy: {{$team->passing_accuracy}}<br>
                Assists: {{$team->assists}}<br>
                Save: {{$team->save}}<br>
                Tackle Success: {{$team->tackle_success}}<br>
                Yellow Card: {{$team->yellow_card}}<br>
                Red Card: {{$team->red_card}}<br>
            </h4>
        </div>
    </div>


    <div class="showcase block block-border-bottom-grey">
        <div class="container">
            <h4>
                Overall:<br>
                Attack: {{$info['attackAverage']}}<br>
                Defence: {{$info['defenceAverage']}}<br>
                Teamplay: {{$info['teamPlayAverage']}}<br>
                Discipline: {{$info['disciplineAverage']}}<br>
            </h4>
        </div>
    </div>
    
    <div class="services block block-bg-gradient block-border-bottom">
        <div class="container">
            <h4 class="text-shadow-white" align="left">
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
                    <input type="hidden" name="attack">
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
                    <input type="hidden" name="defence">
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
                    <input type="hidden" name="teamplay">
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
                    <input type="hidden" name="discipline">
                    <div id="disciplineScore"></div>
                    <br>
                    Comment: <br>
                    <input type='text' name='comment' width="200" height="100" value='{{$team->comment}}'><br><br>
                    <button type="submit" class="btn btn-more btn-lg"><i class="fa fa-commenting-o"></i>Rate!</button>
                </form>

            </h4>
        </div>
    </div>

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
            $("#" + type + "Score").text( (parseInt(index) + 1) + " "+ "Star(s)" );
        });
    </script>
@endsection