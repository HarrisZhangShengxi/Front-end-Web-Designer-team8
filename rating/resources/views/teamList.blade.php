@extends('layouts.app')

@section('content')
    <thead>
    <tr>
        <td>Team</td>
        {{--<td>Shooting Accuracy</td>--}}
        {{--<td>Goals</td>--}}
        {{--<td>Passing Accuracy</td>--}}
        {{--<td>Assists</td>--}}
        {{--<td>Tackle</td>--}}
        {{--<td>Tackle Success</td>--}}
        {{--<td>Yellow Card</td>--}}
        {{--<td>Red Card</td>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($teamlist as $item)
        <table>
            <col width="200">
        <tr>
            <td>
                <a href="/teamDetail?id={{$item->team_id}}">
                    {{$item->name}}
                </a>
            </td>
            {{--<td>{{$item->shooting_accuracy}}</td>--}}
            {{--<td>{{$item->goals}}</td>--}}
            {{--<td>{{$item->passing_accuracy}}</td>--}}
            {{--<td>{{$item->assists}}</td>--}}
            {{--<td>{{$item->tackle}}</td>--}}
            {{--<td>{{$item->tackle_success}}</td>--}}
            {{--<td>{{$item->yellow_card}}</td>--}}
            {{--<td>{{$item->red_card}}</td>--}}
        </tr>
        </table>
    @endforeach
    </tbody>
@endsection