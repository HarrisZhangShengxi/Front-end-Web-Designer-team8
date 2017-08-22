@extends('layouts.app')

@section('content')

    <h1>Players</h1>

    @foreach($pl as $item)
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
    @endforeach

    <h2>Teams</h2>

    @foreach($te as $item)
        <table>
            <col width="200">
            <tr>
                <td>
                    <a href="/playerDetail?id={{$item->team_id}}">
                        {{$item->name}}
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
@endsection