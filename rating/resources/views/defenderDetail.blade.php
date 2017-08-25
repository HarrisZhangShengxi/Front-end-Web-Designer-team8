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
                    Goal Conceded: {{$playerDetail->goal_conceded}}<br>
                    Interceptions: {{$playerDetail->interceptions}}<br>
                    Total Clearances: {{$playerDetail->total_clearances}}<br>
                    Tackle Success: {{$playerDetail->tackle_success}}<br>
                    Yellow/Red Card: {{$playerDetail->yellow_red_card}}<br>
                </h4>
            </div>
        </div>
    </div>
    {{--former rating--}}
    <div class="showcase block block-border-bottom-grey">
        <div class="container">
            <h4>
                Overall:<br>
                Skills: {{$info['skillsAverage']}}<br>
                Phyical: {{$info['phyicalAverage']}}<br>
                Attack: {{$info['attackAverage']}}<br>
                Defence: {{$info['defenceAverage']}}<br>
                Weak Foot: {{$info['weakfootAverage']}}<br>
                Teamplay: {{$info['teamPlayAverage']}}<br>

            </h4>
        </div>
    </div>
    <div class="services block block-bg-gradient block-border-bottom">
        <div class="container">
            <h4 class="text-shadow-white" align="left">
                <form action="/savePlayerRating" method="post">
                    {{csrf_field()}}
                    Skills:
                    <div class="box" id="skillsStar" data-type="skills">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </div>
                    <input type="hidden" name="skills">
                    <div id="skillsScore"></div>
                    <br>
                    <input type='hidden' name='playerratingId' value='{{$playerDetail->id}}'>
                    <input type='hidden' name='playerId' value='{{$playerDetail->player_id}}'>

                    Phyical:
                    <div class="box" id="phyicalStar" data-type="phyical">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </div>
                    <input type="hidden" name="phyical">
                    <div id="phyicalScore"></div>
                    <br>

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

                    Weak Foot:
                    <div class="box" id="weak_footStar" data-type="weak_foot">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </div>
                    <input type="hidden" name="weak_foot">
                    <div id="weak_footScore"></div>
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

                    <br>
                    Comment: <br>
                    <input type='text' name='comment' width="200" height="100" value='{{$playerDetail->comment}}'><br><br>
                    <button type="submit" class="btn btn-more btn-lg"><i class="fa fa-commenting-o"></i>Rate!</button>
                </form>

            </h4>
        </div>
    </div>

    {{--<form action="/savePlayerRating" method="post">--}}
        {{--{{csrf_field()}}--}}
        {{--Skills:--}}
        {{--<select title='player_rating' name="skills">--}}
            {{--<option value="1">1</option>--}}
            {{--<option value="2">2</option>--}}
            {{--<option value="3">3</option>--}}
            {{--<option value="4">4</option>--}}
            {{--<option value="5">5</option>--}}
        {{--</select>--}}
        {{--<input type='hidden' name='playerratingId' value='{{$playerDetail->id}}'>--}}
        {{--<input type='hidden' name='playerId' value='{{$playerDetail->player_id}}'>--}}
        {{--<input type='' name='attack' value='{{$team->attack}}'>--}}
        {{--<br>--}}
        {{--Phyical:--}}
        {{--<select title='player_rating' name="phyical">--}}
            {{--<option value="1">1</option>--}}
            {{--<option value="2">2</option>--}}
            {{--<option value="3">3</option>--}}
            {{--<option value="4">4</option>--}}
            {{--<option value="5">5</option>--}}
        {{--</select>--}}
        {{--<input type='' name='defence' value='{{$team->defence}}'>--}}
        {{--<br>--}}
        {{--Attack:--}}
        {{--<select title='player_rating' name="attack">--}}
            {{--<option value="1">1</option>--}}
            {{--<option value="2">2</option>--}}
            {{--<option value="3">3</option>--}}
            {{--<option value="4">4</option>--}}
            {{--<option value="5">5</option>--}}
        {{--</select>--}}
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        {{--<br>--}}
        {{--Defence:--}}
        {{--<select title='player_rating' name="defence">--}}
            {{--<option value="1">1</option>--}}
            {{--<option value="2">2</option>--}}
            {{--<option value="3">3</option>--}}
            {{--<option value="4">4</option>--}}
            {{--<option value="5">5</option>--}}
        {{--</select>--}}
        {{--<input type='' name='discipline' value='{{$team->discipline}}'>--}}
        {{--<br>--}}
        {{--Weak Foot:--}}
        {{--<select title='player_rating' name="weak_foot">--}}
            {{--<option value="1">1</option>--}}
            {{--<option value="2">2</option>--}}
            {{--<option value="3">3</option>--}}
            {{--<option value="4">4</option>--}}
            {{--<option value="5">5</option>--}}
        {{--</select>--}}
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        {{--<br>Teamplay:--}}
        {{--<select title='player_rating' name="teamplay">--}}
            {{--<option value="1">1</option>--}}
            {{--<option value="2">2</option>--}}
            {{--<option value="3">3</option>--}}
            {{--<option value="4">4</option>--}}
            {{--<option value="5">5</option>--}}
        {{--</select>--}}
        {{--<input type='' name='teamPlay' value='{{$team->team_play}}'>--}}
        {{--<br>--}}
        {{--Comment: <input type='text' name='comment' value='{{$playerDetail->comment}}'><br>--}}
        {{--<input type='submit' value='Rate!'>--}}
    {{--</form>--}}
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

