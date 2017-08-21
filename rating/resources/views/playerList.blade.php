@extends('layouts.app')

@section('content')
    <thead>
    <tr>
        <td>Player</td>
    </tr>
    </thead>
    <tbody>
    @foreach($playerlist as $item)
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
    </tbody>
@endsection